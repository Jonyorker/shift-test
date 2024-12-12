<?php

namespace App\Helpers\Constants;

use ReflectionClass;

class StopEventTypes extends Constants
{
    public const IGNOREEVENTS = [
        'notdriverupdated' => ['RTP', 'WSH', 'NBCST', 'UNA'],
        'stopUpdates' => ['NBCST'],
        'empty' => ['EMT', 'DMT', 'BMT'],
    ];
    public const DONOTUPDATESEAL = ['EMPTY', 'NO', 'NONE', 'NA', 'MT', '0', '00', '000', '0000', '00000', 'NO SEAL'];
    public const DROPEVENTS = ['DLT', 'DUL', 'DRL', 'LUL', 'EMT', 'EBT', 'DMT'];
    public const PICKUPEVENTS = ['HPL', 'LLD', 'BMT', 'BBT', 'HLT', 'HMT'];

    public const TESTDRIVERS = ['TET001', 'PSWIN5', 'PSWIN1', 'PSWIN4'];

    public static function getConstants(): array
    {
        $oClass = new ReflectionClass(__CLASS__);

        return $oClass->getConstants();
    }
}
