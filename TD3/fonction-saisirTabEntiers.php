<?php
function saisirTabEntiers(int $T):array{
    $n = 0;
    $list = [];
    while($T > $n){
        $list[$n] = readline("entrer un nombre");
        $n++;
    }
    return $list;
}

