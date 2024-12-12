<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql = "CREATE procedure bison_au_PSdepartUpd
            @stp int,
            @mov int,
            @leg int,
            @ord int,
            @evt varchar(10),
            @trc varchar(15),
            @drv varchar(10),
            @msgdt datetime,
            @updarr int
        as
        declare @finalstp int,
                @trl1 varchar(15)
        select @trl1 = lgh_primary_trailer
        from legheader with (nolock)
        where lgh_number = @leg
        set @finalstp = isnull(
                        (
                            select top 1
                                stp_number
                            from stops with (nolock)
                            where stp_event in ( 'LUL', 'DRL', 'DUL' )
                                  and lgh_number = @leg
                            order by stp_arrivaldate desc
                        ),
                        -1
                              )
        if @finalstp = -1
        begin
            set @finalstp = isnull(
                            (
                                select top 1
                                    stp_number
                                from stops with (nolock)
                                where stp_event in ( 'EMT', 'EBT' )
                                      and lgh_number = @leg
                                order by stp_arrivaldate desc
                            ),
                            0
                                  )
        end
        --pikes need the next stop updated and the arrivaldate on xdl
        if @evt in ( 'XDL', 'XDU' )
        begin
            declare @delta int
            select @delta = 1
            if @evt = 'XDL'
            begin
                --do update on both arrive and depart
                update stops
                set stp_arrivaldate = @msgdt,
                    stp_departuredate = dateadd(minute, @delta, @msgdt),
                    skip_trigger = 1,
                    stp_status = 'DNE',
                    stp_departure_status = 'DNE'
                where stp_number = @stp
                update event
                set evt_startdate = @msgdt,
                    evt_enddate = dateadd(minute, @delta, @msgdt),
                    skip_trigger = 1,
                    evt_status = 'DNE',
                    evt_departure_status = 'DNE'
                where stp_number = @stp
                select @delta = @delta + 1
            end
            else
            begin
                --only on depart for xdu
                if @updarr > 0
                begin
                    update stops
                    set stp_arrivaldate = @msgdt,
                        stp_status = 'DNE',
                        stp_departuredate = dateadd(minute, 1, @msgdt),
                        skip_trigger = 1,
                        stp_departure_status = 'DNE'
                    where stp_number = @stp
                    update event
                    set evt_startdate = @msgdt,
                        evt_status = 'DNE',
                        evt_enddate = dateadd(minute, 1, @msgdt),
                        skip_trigger = 1,
                        evt_departure_status = 'DNE'
                    where stp_number = @stp
                end
                else
                begin
                    update stops
                    set stp_departuredate = @msgdt,
                        skip_trigger = 1,
                        stp_departure_status = 'DNE'
                    where stp_number = @stp
                    update event
                    set evt_enddate = @msgdt,
                        skip_trigger = 1,
                        evt_departure_status = 'DNE'
                    where stp_number = @stp
                end
            end
            --update second XDL/XDU
            declare @nextstp int,
                    @nxtarrst varchar(6),
                    @seq int
            select @seq = stp_mfh_sequence
            from stops
            where stp_number = @stp
            select @nextstp = stp_number,
                   @nxtarrst = stp_status
            from stops with (nolock)
            where lgh_number = @leg
                  and stp_mfh_sequence = @seq + 1
                  and stp_event in ( 'XDL', 'XDu' )
            --if we are going to update make sure the nextstop exists
            if @nextstp is not null
            begin
                --if the stop statis is dne dont update it
                if @nxtarrst = 'DNE'
                begin
                    update stops
                    set stp_arrivaldate = dateadd(minute, @delta, @msgdt),
                        stp_departuredate = dateadd(minute, @delta + 1, @msgdt),
                        skip_trigger = 1,
                        stp_departure_status = 'DNE'
                    where stp_number = @nextstp
                    update event
                    set evt_startdate = dateadd(minute, @delta, @msgdt),
                        evt_enddate = dateadd(minute, @delta + 1, @msgdt),
                        skip_trigger = 1,
                        evt_departure_status = 'DNE'
                    where stp_number = @nextstp
                end
                else
                begin
                    update stops
                    set stp_arrivaldate = dateadd(minute, @delta, @msgdt),
                        stp_departuredate = dateadd(minute, @delta + 1, @msgdt),
                        skip_trigger = 1,
                        stp_status = 'DNE',
                        stp_departure_status = 'DNE'
                    where stp_number = @nextstp
                    update event
                    set evt_startdate = dateadd(minute, @delta, @msgdt),
                        evt_enddate = dateadd(minute, @delta + 1, @msgdt),
                        skip_trigger = 1,
                        evt_status = 'DNE',
                        evt_departure_status = 'DNE'
                    where stp_number = @nextstp
                end
            end
            UPDATE legheader
            SET lgh_outstatus = 'CMP',
                lgh_type1 = 'UNK',
                lgh_enddate = dateadd(minute, @delta + 1, @msgdt),
                lgh_updatedby = 'AUTO',
                lgh_updatedon = getdate(),
                lgh_updateapp = 'AUTO',
                lgh_dispatchdate = NULL,
                lgh_feetavailable = NULL
            WHERE lgh_number = @leg
        end
        else
        begin
            --do update
            if @updarr > 0
            begin
                update stops
                set stp_arrivaldate = @msgdt,
                    stp_status = 'DNE',
                    stp_departuredate = dateadd(minute, 1, @msgdt),
                    skip_trigger = 1,
                    stp_departure_status = 'DNE'
                where stp_number = @stp
                update event
                set evt_startdate = @msgdt,
                    evt_status = 'DNE',
                    evt_enddate = dateadd(minute, 1, @msgdt),
                    skip_trigger = 1,
                    evt_departure_status = 'DNE'
                where stp_number = @stp
            end
            else
            begin
                update stops
                set stp_departuredate = @msgdt,
                    skip_trigger = 1,
                    stp_departure_status = 'DNE'
                where stp_number = @stp
                update event
                set evt_enddate = @msgdt,
                    skip_trigger = 1,
                    evt_departure_status = 'DNE'
                where stp_number = @stp
            end
        end

        exec bison_au_adjustmove @mov, @stp, 0

        if @finalstp = @stp
        begin
            if @ord > 0
            begin
                UPDATE orderheader
                SET ord_status = 'CMP',
                    ord_invoicestatus = 'AVL',
                    ord_completiondate = @msgdt
                WHERE ord_hdrnumber = @ord
            end
            if @evt not in ( 'XDL', 'XDU' )
            begin
                UPDATE legheader
                SET lgh_outstatus = 'CMP',
                    lgh_type1 = 'UNK',
                    lgh_enddate = @msgdt,
                    lgh_updatedby = 'AUTO',
                    lgh_updatedon = getdate(),
                    lgh_updateapp = 'AUTO',
                    lgh_dispatchdate = NULL,
                    lgh_feetavailable = NULL
                WHERE lgh_number = @leg
            end
            exec update_assetassignment @mov
            UPDATE stops
            SET stp_lgh_status = 'CMP',
                skip_trigger = 1
            WHERE lgh_number = @leg
        end
        else
        begin
            UPDATE legheader
            SET lgh_updatedby = 'AUTO',
                lgh_updatedon = getdate(),
                lgh_updateapp = 'AUTO'
            WHERE lgh_number = @leg
        end

        if @evt in ( 'HPL', 'LLD' )
        begin
            UPDATE orderheader
            SET ord_status = 'STD'
            WHERE mov_number = @mov
        end

        if @evt in ( 'BBT', 'EBT' )
        begin
            exec update_move_processing_sp @mov, 'Y'
        end
        else
        begin
            exec update_move_light @mov
        end";
        DB::connection('psbison')->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $sql = 'DROP PROCEDURE IF EXISTS bison_au_PSdepartUpd';
        DB::connection('psbison')->getPdo()->exec($sql);
    }
};
