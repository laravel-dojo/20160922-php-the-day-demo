<?php

require __DIR__.'/bootstrap.php';

return [
    'paths'        => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds'      => '%%PHINX_CONFIG_DIR%%/db/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database'        => 'development',
        'development'             => [
            'adapter' => 'mysql',
            'host'    => DB_HOST,
            'name'    => DB_DATABASE,
            'user'    => DB_USERNAME,
            'pass'    => DB_PASSWORD,
            'port'    => DB_PORT,
            'charset' => DB_CHARSET,
        ],
    ],
];