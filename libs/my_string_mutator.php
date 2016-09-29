<?php

class my_string_mutator {
    function trim($string, $start = 0, $limit = 130, $append = '…')  {  return mb_substr($string, $start, $limit, 'utf-8').$append;   }

    function trim_created_at($date)
    {
        $date_mutator = new my_date_mutator();
        return $date_mutator->convert($date);
    }
}