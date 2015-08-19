<?php namespace Genius\Configuration;

return array(

    'database'
    => [
        'hostname'  => 'localhost',
        'username'  => 'root',
        'password'  => '',
    ],

    'system'
    => [
        'language'  => 'en-us',
        'timezone'  => 'Asia/Jerusalem',

        'date-format'
        => [
            'log'       => 'H:i:s d-m-Y',
            'friendly'  => '',
            'sql'       => '',
        ],
    ],

    'site'
    => [
        'name'      => 'Genius',
        'address'   => '',
        'status'    => true,

        'pages'
        => [
            null    => 'Home',
            'login' => 'Login',
        ],
    ],

    'webmaster'
    => [
        'name'      => 'amit',
        'email'     => '@.com',
    ],

);