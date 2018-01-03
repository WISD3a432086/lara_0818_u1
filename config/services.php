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
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id'=> env('1011890069895-k013e3cii4poa2h3pa87u452e2qjo2sr.apps.googleusercontent.com'),
        'client_secret' => env('jMZp6Eu-0A2vT0RrKjcGiH-m'),
        'redirect'=> env('http://localhost:8000/login/social/google/callback')
    ],

    'github' => [
        'client_id'     => env('187f7b6b92f8383f689c'),
        'client_secret' => env('08655c272d06b91afb8c38103433a65ea7fc8b12'),
        'redirect'      => env('http://localhost:8000/login/social/github/callback')
    ],


];
