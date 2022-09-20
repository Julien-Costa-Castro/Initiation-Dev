<?php
    $a = "";
    $n = 0;
    $m = 0;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a != " ") $n++;
        if($a == " "){
            $n = 0;
            $n--;
        }

    }
echo "###$n###";
