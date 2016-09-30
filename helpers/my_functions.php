<?php

use Recca0120\LaravelTracy\Tracy;

if (! function_exists('copyright')) {
    function copyright()
    {
        return 'Copyright &copy; Laravel 道場示範教材 '.date('Y');
    }
}

if (! function_exists('sql')) {
    function sql($sql)
    {
        $tracy = Tracy::instance();
        $databasePanel = $tracy->getPanel('database');
        $databasePanel->logQuery($sql);
    }
}
