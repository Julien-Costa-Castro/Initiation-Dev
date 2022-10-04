<?php
function moyenne(array $n):float{
    $q = 0;
    $p = 0;
    $c = 0;
    while(count($n) != $q){
        $p = $n[$q] + $p;
        $q++;
    }
    $c = $p / count($n);
    return $c;
}
