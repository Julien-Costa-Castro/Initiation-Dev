<?php
/**
 * Donnée : un entier n
 * Résultat : vrai si n est une année bissextile, faux sinon
 */
    $a = readline();
    $b = readline();
    $c = readline();
    $d = $b**2 - 4*$a * $c;
    if($d < 0) {
        echo"pas de solutions";
    }
    else if ($d == 0){
        $x = -$b/ (2*$a);
        echo"x=$x";
    }
    else if ($d > 0){
        $x1 = (-$b + sqrt($d))/ (2*$a);
        $x2 = (-$b - sqrt($d))/ (2*$a);
        echo"x1=$x1 et x2=$x2";
    }
