<?php

return [
    'defaults' => [
        'guard' => 'buyer',
        'passwords' => 'buyer',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'buyer' => [
            'driver' => 'session',
            'provider' => 'buyer',
        ],

        'seller' => [
            'driver' => 'session',
            'provider' => 'seller',
        ]
    ],

    'providers' => [
        'buyer' => [
            'driver' => 'eloquent',
            'model' => App\Models\Buyer::class,
        ],

        'seller' => [
            'driver' => 'eloquent',
            'model' => App\Models\Seller::class,
        ]
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];