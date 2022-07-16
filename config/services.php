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
    'google' => [
        'client_id' => '487307723481-vgl2mp6kp77qsdnaq13tkv1gnhe4922j.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google'
    ],

    'github' => [
        'client_id' => 'e7850cdb73444df1cbb4',
        'client_secret' => 'd8a8ffc846628b787f76a395e4c0c11bc1dc72a2',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],

    'facebook' => [
        'client_id' => '359760292903702',
        'client_secret' => '62704f1ff4e86dd2bf6b6eb0f2e41779',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
    ],
    
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
