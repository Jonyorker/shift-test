<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Custom Configs to avoid a direct .env read
    |--------------------------------------------------------------------------
    |
    | This is where we want to place any Bison specific configs not typically
    | found in Laravel. We want to avoid reading from .env directly in code
    | so this is how we should access those values
    |
    */

    'password_encryption_iv' => env('PASSWORD_ENCRYPTION_IV'),
    'password_encryption_key' => env('PASSWORD_ENCRYPTION_KEY'),
    'rest_token' => env('REST_TOKEN'),

];
