<?php

namespace App\Helpers;

function sEcho($text, $includeTime = true, $debugByPass = null): void
{
    if (config('app.debug') || $debugByPass === true) {
        if ($includeTime || is_null($includeTime)) {
            echo date('H:i:s') . ' **** ';
        }
        echo $text . PHP_EOL;
        flush();
    }
}
