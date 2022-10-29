<?php
/**
 * Donnée : un entier n
 * Résultat : affiche la longueur du dernier mot de la chaine de caractère
 */
$a = "";
$n = 0;
$m = 0;

while ( $a != "." ){
    $a = fgetc(STDIN);
    if( $a != " ") ++$n;
    if($a == " "){
        $m = $n;
        $n = 0;
    }
}
if ($n >= $m) $m = $n-1;
echo "***$m***";
