<?php
    $nb = readline("Entrer un nombre: ");
    $somme = 0;
    $i = 1;
    while($somme < $nb){
        $somme += $i;
        $i++;
    }
    if($somme - $nb > $nb - ($somme - $i + 1)){
        $somme = $somme - $i + 1;
    }
    echo "###$somme###";