<?php
/**
 * Donnée : un entier n
 * Résultat : vrai si n est une année bissextile, faux sinon
 */
    $n = readline();
    if ((($n %4 == 0 ) && ($n %100 != 0)) || ($n %400 == 0)) echo"année bissextile";
    else echo"année non bissextile";
