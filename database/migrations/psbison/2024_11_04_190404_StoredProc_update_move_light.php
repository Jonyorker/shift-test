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
        $sql = "CREATE PROCEDURE update_move_light (@mov int)
        AS
        /**************************************************************************************************************************************************************************
         **
         ** Parameters:
         **   Input:
         **     @mov              INTEGER
         **       - mov_number to process
         **
         ** Revison History:
         **   INT-106022 - RJE 03/31/2017 - Created new procedure update_move_processing_sp to consolidate update_move and update_move_light
         **                                 processing to make it simpler to keep them in sync, update_move passes 'Y' in second parameter
         **                                 which causes update_assetassignment to run.
         **************************************************************************************************************************************************************************/
         --bison change kl
         --checking for trailer additions
        if exists (select 8 from legheader where mov_number=@mov and lgh_primary_trailer <> 'UNKNOWN')
            EXECUTE update_move_processing_sp @mov, 'Y'
            --end changes kl
        else
        EXECUTE update_move_processing_sp @mov, 'N'

        RETURN ";
        DB::connection('psbison')->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $sql = 'DROP PROCEDURE IF EXISTS update_move_light';
        DB::connection('psbison')->getPdo()->exec($sql);
    }
};
