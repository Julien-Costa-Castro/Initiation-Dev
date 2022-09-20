<?php
    $a = "";
    $n = 0;
    $m = false;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a == "l") $m = true;
        if ($a == " ") $m=false;
        if ($m && $a == "e") {
            $n++;
            $m = false;
        }


    }
    echo "###$n###";
