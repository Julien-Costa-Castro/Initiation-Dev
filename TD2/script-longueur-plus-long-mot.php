<?php
    $a = "";
    $n = 0;
    $longueur = 0;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        $n++;
        if($longueur<$n) $longueur++;
        if($a == " "){
            $n=0;
        }
    }
$longueur--;
echo "###$longueur###";
