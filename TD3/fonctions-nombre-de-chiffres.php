<?php
function nbChiffres(int $n):int{
    $c = 0;
    while($n > 0){
        $n = $n / 10;
        $c++;
    }
    return $c;
}
