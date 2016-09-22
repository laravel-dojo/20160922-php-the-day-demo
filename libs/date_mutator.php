<?php

class my_date_mutator {
    function convert($date) { return explode(' ', $date)[0];  }
}