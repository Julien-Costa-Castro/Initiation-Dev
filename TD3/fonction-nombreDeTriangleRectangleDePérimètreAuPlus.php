<?php

function nombreDeTriangleRectangleDePérimètreAuPlus(int $n):int{
    $nb = 0;
    for($i = 1; $i != $n;$i++){
        for($j = $i; $j != $n;$j++){
            for($k = 1; $k != $n;$k++){
                if($i+$j+$k<=$n){
                    if($i**2+$j**2==$k**2){
                        $nb++;
                    }
                }
            }
        }
    }
    return $nb;
}

