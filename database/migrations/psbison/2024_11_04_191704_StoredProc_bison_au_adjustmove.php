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
        $sql = "CREATE procedure bison_au_adjustmove
            @mov integer,
            @stp integer,
            @actnbs integer

        as

        declare @seq integer, @minseq integer, @arrive datetime, @depart datetime,
        @nextstp integer, @nextarrive datetime, @nextdepart datetime, @nextevt varchar(6), @status varchar(6)
        declare @truck varchar(8)

        SET NOCOUNT ON

        select @seq=stp_mfh_sequence, @arrive=stp_arrivaldate, @depart=stp_departuredate, @status=stp_status
        from stops where stp_number=@stp

        if @status='OPN'
          select @actnbs=0

        if @arrive>@depart begin
          update stops set skip_trigger=1, stp_arrivaldate=@arrive where stp_number=@stp
          update event set skip_trigger=1, evt_startdate=@arrive where stp_number=@stp
          select @depart=@arrive
        end

        while (1=1) begin

          select @seq=min(stp_mfh_sequence)
          from stops (nolock)
          where mov_number=@mov and stp_mfh_sequence>@seq

          if @seq is null break

          select @nextstp=stp_number, @nextarrive=stp_arrivaldate, @nextdepart=stp_departuredate, @nextevt=stp_event
          from stops  (nolock)
          where mov_number=@mov and stp_mfh_sequence=@seq

          select @truck=evt_tractor
          from event  (nolock)
          where stp_number=@nextstp

        --  select @nextevt,@actnbs,@seq

         -- we arent actualizing NBS anymore
        --  if @nextevt in ('NBS','RTP') and @actnbs=1 and @truck not in (select truckname from tbltrucks t where CurrentDispatcher in (5,11) ) begin
        --  if @nextevt in ('NBS','RTP') and @actnbs=1 and @truck not in ('36397','36402','36407','36416','36422','36426','36455','36460','36470','36481','36589') begin
        --    update stops set skip_trigger=1, stp_status='DNE' where stp_number=@nextstp
        --    update event set skip_trigger=1, evt_status='DNE' where stp_number=@nextstp
        --  end
          select @actnbs=0


        --  select @seq,@nextarrive,@nextdepart

          if @depart>@nextarrive or (@depart=@nextarrive and @nextevt not in ('XDU','XDL')) begin
            if @nextevt in ('XDU','XDL') begin
              update stops set skip_trigger=1, stp_arrivaldate=@depart,stp_departuredate=@depart where stp_number=@nextstp
              update event set skip_trigger=1, evt_startdate=@depart,evt_enddate=@depart where stp_number=@nextstp
            end else begin
              update stops set skip_trigger=1, stp_arrivaldate=dateadd(minute,1,@depart),stp_departuredate=dateadd(minute,1,@depart) where stp_number=@nextstp
              update event set skip_trigger=1, evt_startdate=dateadd(minute,1,@depart),evt_enddate=dateadd(minute,1,@depart) where stp_number=@nextstp
            end
          end
          --took this out and added update stp_departuredate evt_enddate above instead.
        --  if @nextarrive>@nextdepart begin
        ----    print 'update departure stop+event'
        --    update stops set skip_trigger=1, stp_departuredate=@nextarrive where stp_number=@nextstp
        --    update event set skip_trigger=1, evt_enddate=@nextarrive where stp_number=@nextstp
        --    select @nextarrive=@depart
        --  end

          select @arrive=stp_arrivaldate, @depart=stp_departuredate
          from stops where mov_number=@mov and stp_mfh_sequence=@seq

        end";
        DB::connection('psbison')->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $sql = 'DROP PROCEDURE IF EXISTS bison_au_adjustmove';
        DB::connection('psbison')->getPdo()->exec($sql);
    }
};
