<?php
/**
 * Donnée : un mot
 * Résultat : affiche la longueur du plus long mot de la chaine de caractère
 */
    $a = "";
    $n = 0;
    $longueur = 0;

    while ( $a != "." ){
        $a = fgetc(STDIN);
        $n++;
        if($longueur<$n) $longueur++;
        if($a == " "){
            $n=0;
        }
    }
$longueur--;
echo "###$longueur###";
