<?php

    $a = "";
    $n = 0;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a == "m") $n++;
    }
    echo("Le nombre de 'm' est : ###$n###");