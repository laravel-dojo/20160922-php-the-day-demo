<?php

class my_string_mutator {
    function trim($string, $start = 0, $limit = 130, $append = '…')  {  return mb_substr($string, $start, $limit, 'utf-8').$append;   }
}