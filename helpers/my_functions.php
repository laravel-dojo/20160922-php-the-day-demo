<?php

use Recca0120\LaravelTracy\Tracy;

function copyright()
{
    return 'Copyright &copy; Laravel 道場示範教材 '.date('Y');
}

function sql($sql)
{
    $tracy = Tracy::instance();
    $databasePanel = $tracy->getPanel('database');
    $databasePanel->logQuery($sql);
}
