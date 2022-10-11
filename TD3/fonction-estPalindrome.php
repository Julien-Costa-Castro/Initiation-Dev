<?php
function estPalindrome(string $n):bool{
    $droite = strlen($n)-1;
    $gauche = 0;
    while($droite > $gauche){
        if($n[$droite]!=$n[$gauche]){
            return false;
        }
        $gauche++;
        $droite--;
    }
    return true;
}
