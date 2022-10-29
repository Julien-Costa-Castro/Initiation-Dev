<?php
/**
 * Donnée : un entier n
 * Résultat : affiche le nombre de valeurs paires
 */
echo"saisir un nombre entier positif ou nul:\n";
$n = readline();
$p = 0;
    while($n != 0){
        if($n %2 == 0) {
            $p = $p + 1;
        }
        echo"saisir un nombre entier positif ou nul: \n";
        $n = readline();
    }
echo"***$p***";



