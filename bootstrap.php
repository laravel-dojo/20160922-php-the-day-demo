<?php

date_default_timezone_set('Asia/Taipei');

require __DIR__.'/vendor/autoload.php';

use Carbon\Carbon;
use Dotenv\Dotenv;
use Recca0120\LaravelTracy\Tracy;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

Tracy::instance();

Carbon::setLocale('zh-TW');

define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_PORT', env('DB_PORT', 3306));
define('DB_DATABASE', env('DB_DATABASE', 'homestead'));
define('DB_CHARSET', env('DB_CHARSET', 'utf-8'));
define('DB_USERNAME', env('DB_USERNAME', 'homestead'));
define('DB_PASSWORD', env('DB_PASSWORD', 'secret'));
