<?php namespace Genius\Configuration;

return array(

    'mysql'
    => [
        'host'      => 'localhost',
        'port'      =>  3306,

        'username'  => 'root',
        'password'  => '',

        'dbname'    => 'geniusdb',
        'tprefix'   => '',
    ],

    'system'
    => [
        'language'  => 'en-us',
        'template'  => 'classic',

        'timezone'  => 'Asia/Jerusalem',

        'date-format'
        => [
            'log'       => 'H:i:s d-m-Y',
            'friendly'  => '',
            'sql'       => '',
        ],

        'hash_salt' => '',
    ],

    'site'
    => [
        'name'      => 'Brainiac',
        'address'   => '',
        'status'    => true,
    ],

    'webmaster'
    => [
        'name'      => 'Webmaster',
        'email'     => '@.com',
    ],

);