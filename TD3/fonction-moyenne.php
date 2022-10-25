<?php
function moyenne(array $n):float{
    $somme = 0;
    foreach($n as $v){
        $somme += $v;
    }
    return $somme/count($n);
}


