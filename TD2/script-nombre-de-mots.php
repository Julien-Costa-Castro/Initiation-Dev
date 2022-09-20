<?php

    $a = "";
    $n = 1;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a == " ") $n++;
}
    echo "###$n###";
