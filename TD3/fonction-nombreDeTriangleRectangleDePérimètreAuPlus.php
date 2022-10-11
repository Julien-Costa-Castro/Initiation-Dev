<?php

function nombreDeTriangleRectangleDePérimètreAuPlus(int $n):int{
    $nb = 0;
    for($i = 1; $i != $n;$i++){
        for($j = 1; $j != $n;$j++){
            for($k = 1; $k != $n;$k++){
                if($i**2+$j**2==$k**2){
                    if($i+$j+$k<=$n){
                        $nb++;
                    }
                }
            }
        }
    }
    return $nb;
}

