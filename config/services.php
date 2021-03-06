<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'leveluser' => [1=>'Administrator',2=>'Pengumpulan',3=>'Pendayagunaan',4=>'SDM',5=>'Keuangan'],
    'zenziva' => ['userkey'=>'ipo6j7la3q9ya9i3s6k7','passkey'=>'6h7c33rlid30zjxt5vg4'],
    'duitku' => ['mcode'=>'D1248','apikey'=>'934ef1002eb09a26c1fe05735b2c82f7']
];
