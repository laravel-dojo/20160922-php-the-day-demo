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

define('DB_HOST', getenv('DB_HOST'));
define('DB_PORT', getenv('DB_PORT'));
define('DB_DATABASE', getenv('DB_DATABASE'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
