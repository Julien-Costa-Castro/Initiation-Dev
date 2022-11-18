<?php
echo("entrer le nombre de valeurs : ");
$nb = readline();
echo("entrer les valeurs de la suite:\n");
$n = readline();
$u = $n;
$i = 1;
$suitecroissante = true;
$findelasuiteatteinte = false;
while (!$findelasuiteatteinte and $suitecroissante) {
    $n = readline();
    if ($u <= $n) {
        $u = $n;
    } else $suitecroissante = false;
    $i++;
    if ($i >= $nb) {
        $findelasuiteatteinte = true;
    }
}
if ($suitecroissante == false) {
    echo "faux";
} else {
    echo "vrai";
}
