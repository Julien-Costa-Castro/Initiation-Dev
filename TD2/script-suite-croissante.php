<?php
     $u = 0; //déclare les valeurs à 0
     $n = 1; // déclare les nombre de termes a 0
     $verif = true; // déclare si la suite n'est pas croissante
     echo "Entrer la première valeur de la suite: "; //affiche pour entrer la valeur
     $u = readline(); // saisi pour les valeurs
     $temp = $u; // la variable $temp prend la valeur de la premier valeur de la suite


     while($n != 16){// tant que le nombre de termes n'est pas égale à 16
         echo"entre la suite: "; // afficher
         $u = readline(); // lit la valeur suivant
         $n++; // ajoute un terme au précédent
         if($temp < $u ){ // si la variable temp est inférieur à $u
             $temp = $u; // alors la valeur $temp prend la valeur précedente de $u
         }

         else if($u <= $temp){
             $verif = false;
         }

     }
    if ($verif == true){
        echo"vrai";
    }
    else{
        echo"faux";
    }


