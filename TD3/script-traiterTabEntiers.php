<?php
require ("fonction-saisirTabEntiers.php");
require ("procédure-afficherTabEntiers.php");
require ("fonction-moyenne.php");
$list = saisirTabEntiers(16);
afficherTabEntiers($list);
echo moyenne($list);
for($i=0;$i<count($list);$i++){
    if($list[$i] % 2 == 0){
        $list[$i] = $list[$i] + 1;
    }
}
afficherTabEntiers($list);

