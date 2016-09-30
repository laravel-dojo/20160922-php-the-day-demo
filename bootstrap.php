<?php

date_default_timezone_set('Asia/Taipei');

require __DIR__.'/vendor/autoload.php';

include __DIR__.'/libs/my_string_mutator.php';
include __DIR__.'/libs/date_mutator.php';
include __DIR__.'/helpers/my_functions.php';

use Carbon\Carbon;
use Dotenv\Dotenv;
use Recca0120\LaravelTracy\Tracy;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

include __DIR__.'/inc/database.php';

Tracy::instance();

Carbon::setLocale('zh-TW');
