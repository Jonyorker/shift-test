<?php

return [

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'rbac_provider',
        ],
    ],

    'providers' => [
        'rbac_provider' => [
            'driver' => 'rbac_provider_driver',
            'model' => App\Models\bisonweb\RbacUsers::class,
        ],
    ],

];
