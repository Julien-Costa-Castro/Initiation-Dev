<?php
require ("fonction-fréquenceChiffres.php");
function aChiffresTousDifferents(int $n):bool{
    $b = fréquenceChiffres($n);
    for($i = 0; $i < 10; $i++){
        if($b[$i] > 1){
            return false;
        }
    }
    return true;
}

