<?php
    function afficherTabEntiers(array $T):void{
        $n = count($T);
        echo "[";
        for($i=0;$i<$n;$i++){
            echo $T[$i];
            if($i < $n - 1 ){
                echo ",";
            }
        }
        echo "]";
    }

