<?php
function fréquenceChiffres(int $n):array{
    $b = array(0,0,0,0,0,0,0,0,0,0);
    while ($n > 0){
        $b[$n%10]++;
        $n = intdiv($n ,10);
    }
return $b;
}
