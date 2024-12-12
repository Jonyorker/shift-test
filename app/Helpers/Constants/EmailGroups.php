<?php

namespace App\Helpers\Constants;

use ReflectionClass;

class EmailGroups extends Constants
{
    public const WEB_TECH = [
        'email' => 'webservices@bisontransport.com',
        'name' => 'Web Services',
    ];

    public const SERVICE_TECH = [
        'email' => 'systems@bisontransport.com',
        'name' => 'systems Services',
    ];

    public static function getConstants(): array
    {
        $oClass = new ReflectionClass(__CLASS__);

        return $oClass->getConstants();
    }
}
