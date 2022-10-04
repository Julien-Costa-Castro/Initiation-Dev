<?php
function nbChiffresDuCarre(int $n):int{
    $c = 0;
    $n = $n**2;
    while($n > 0){
        $n = $n / 10;
        $c++;
    }
    return $c;
}