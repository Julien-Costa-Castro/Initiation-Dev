<?php
/**
 * Donnée : un entier n
 * Résultat : affiche le nombre de lettre "m" dans la chaine de caractère
 */
    $a = "";
    $n = 0;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        if( $a == "m") $n++;
    }
    echo("Le nombre de 'm' est : ###$n###");