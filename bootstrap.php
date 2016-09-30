<?php

date_default_timezone_set('Asia/Taipei');

require __DIR__.'/vendor/autoload.php';

use Carbon\Carbon;
use Dotenv\Dotenv;
use Recca0120\LaravelTracy\Tracy;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

include __DIR__.'/inc/database.php';

Tracy::instance();

Carbon::setLocale('zh-TW');
