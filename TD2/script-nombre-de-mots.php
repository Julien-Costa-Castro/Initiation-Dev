<?php
/**
 * Donnée : un entier n
 * Résultat : affiche le nombre de mots
 */
    $a = "";
    $n = 1;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a == " ") $n++;
}
    echo "###$n###";
