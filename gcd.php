<?php
/*
GCD - greatest common divisor;
This function find gcd for two integers which not equals 0.
*/

function gcd($a, $b){
    $remainder = 0;
    while ($b !== 0){
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
    return $a;
}

