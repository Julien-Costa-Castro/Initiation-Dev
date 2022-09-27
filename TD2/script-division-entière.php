<?php
    echo "entrez un dividende : ";
    $n = readline();
    echo "entrez un diviseur : ";
    $p = readline();
    $reste = $n % $p;
    $q = ($n - $reste) / $p;
    echo "$n = $p x $q + $reste";


