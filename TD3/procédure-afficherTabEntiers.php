<?php
    function afficherTabEntier(array $T):void{
        $n = count($T);
        for($i=0;$i<$n;$i++){
            echo $T[$i]." ";
        }
    }