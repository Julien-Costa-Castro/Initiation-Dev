<?php
/**
 * Donnée : un entier n
 * Résultat : affiche le nombre de "le" dans la chaine de caractère
 */
$a = "";
$n = 0;
$m = false;

while ( $a != "." ){
    $a = fgetc(STDIN);
    if( $a != "e" && $m) $m = false;
    if( $a == "l") $m = true;
    if ($a == " ") $m=false;
    if ($m && $a == "e") {
        $n++;
        $m = false;
    }


}
echo "***$n***";
