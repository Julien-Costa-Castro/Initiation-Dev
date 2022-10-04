<?php
    echo "entrez un dividende : ";
    $n = readline();
    echo "entrez un diviseur : ";
    $p = readline();
    $q = 0;
    $s = $n ;
    while($n >= $p){
        $n = $n - $p;
        $q = $q + 1;
    }
    echo "$s = $p x $q + $n";



