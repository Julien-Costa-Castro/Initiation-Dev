<?php
function nbDeChiffresDe(int $n):int{

    $c = 0;
    while($n > 0){
        $n = floor($n/10);
        ++$c;

    }

    return $c;
}


function nbChiffresDuCarreDe(int $n): int{
    return nbChiffresDe($n * $n);
}
