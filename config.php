<?php namespace Genius\Configuration;

return array(

    'db'
    => [
        'default_driver' => 'mysql',
        'table_prefix'   => '',

        'mysql'
        => [
            'host'      => 'localhost',
            'port'      =>  3306,

            'username'  => 'root',
            'password'  => '',

            'dbname'    => 'geniusdb',
        ],

        'sqlite'
        => [
            'dbfile' => '',
        ],
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

        'hash_salt' => '',
    ],

    'site'
    => [
        'name'      => 'Genius',
        'address'   => '',
        'status'    => true,
    ],

    'webmaster'
    => [
        'name'      => 'amit',
        'email'     => '@.com',
    ],

);