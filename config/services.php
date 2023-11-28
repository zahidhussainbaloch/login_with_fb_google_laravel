<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '253832896519521',
        'client_secret' => '356cc9fd0a58b555594bfc43b59eb27e',
        'redirect' => 'https://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
     'client_id' => '258777860142-27huprtf0ad07cva0c5urjie4lgs7ioe.apps.googleusercontent.com',
     'client_secret' => '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',
     'redirect' => 'http://localhost:8000/auth/google/callback',
     ],

];
