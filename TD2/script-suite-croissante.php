<?php
$i = 0;
echo("entrer la première valeur : ");
$i = readline();
$u = 0;
$n = 1;
$verif = true;
$temp = $u;


while ($n != $i ) {
    echo "Entrer la valeur suivante de la suite: ";
    $u = readline();
    $n++;
    if ($u > $temp) {
        $temp = $u;
    }
    else {
        $verif = false;
    }
}
if($verif == false){
    echo "faux";
}

else {
    echo "vrai";
}
