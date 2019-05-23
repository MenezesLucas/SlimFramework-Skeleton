<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        'view' => [
            'path' => __DIR__ . '/../resources/views',
            'twig' => [
                'cache' => false
            ]
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ]
];