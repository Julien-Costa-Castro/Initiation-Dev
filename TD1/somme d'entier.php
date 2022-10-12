<?php
    echo("saisir le nombre d'addition : ");
    $a=readline();
    $i= 0;
    $sum= 0;
    while($i < $a)
    {echo("saisir le nombre : ");
        $b= readline();
        $sum= $sum + $b;
        $i++;
    }
echo("La somme est égale à $sum \n");