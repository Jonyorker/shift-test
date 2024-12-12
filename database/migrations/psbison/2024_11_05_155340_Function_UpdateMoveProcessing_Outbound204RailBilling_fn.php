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
        $sql = "CREATE FUNCTION UpdateMoveProcessing_Outbound204RailBilling_fn
          (
            @stops  UpdateMoveProcessingStops READONLY,
            @legs   UpdateMoveProcessingLegs  READONLY
          )
        RETURNS @Outbound204RailBilling TABLE(lgh_number INTEGER NOT NULL PRIMARY KEY, RailDispatchStatus CHAR(1) NULL)
        AS
        BEGIN
          WITH LegStops AS
          (
            SELECT  LGH.lgh_number,
                    COALESCE(OC.cmp_railramp, 'N') OriginRailRamp,
                    COALESCE(DC.cmp_railramp, 'N') DestRailRamp
              FROM  @legs LGH
                      LEFT OUTER JOIN @stops O ON O.lgh_number = LGH.lgh_number AND O.stp_event = 'HLT'
                      LEFT OUTER JOIN company OC WITH(NOLOCK) ON OC.cmp_id = O.cmp_id
                      LEFT OUTER JOIN @stops D ON D.lgh_number = LGH.lgh_number AND D.stp_event = 'DLT'
                      LEFT OUTER JOIN company DC WITH(NOLOCK) ON DC.cmp_id = D.cmp_id
             WHERE  LGH.legcount > 2
               AND  LGH.sequence > 1
          )
          INSERT INTO @Outbound204RailBilling
            SELECT  LS.lgh_number,
                    CASE
                      WHEN LS.OriginRailRamp = 'Y' AND LS.DestRailRamp = 'Y' THEN 'D'
                      ELSE NULL
                    END RailDispatchStatus
              FROM  LegStops LS

          RETURN
        END";
        DB::connection('psbison')->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $sql = 'DROP FUNCTION IF EXISTS UpdateMoveProcessing_Outbound204RailBilling_fn';
        DB::connection('psbison')->getPdo()->exec($sql);
    }
};
