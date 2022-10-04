<?php
function saisirTabEntiers(int $T):array{
    $n = 0;
    $list = [];
    while($T > $n){
        $list[$n] = readline("entrer un nombre");
        $n++;
    }
    return $list;
}
function afficherTabEntiers(array $T):void{
    $n = count($T);
    echo "[";
    for($i=0;$i<$n;$i++){
        echo $T[$i];
        if($i < $n - 1 ){
            echo ",";
        }
    }
    echo "]";
}
function moyenne(array $n):float{
    $q = 0;
    $p = 0;
    $c = 0;
    while(count($n) != $q){
        $p = $n[$q] + $p;
        $q++;
    }
    $c = $p / count($n);
    return $c;
}
$list = saisirTabEntiers(100);
afficherTabEntiers($list);
echo moyenne($list);
for($i=0;$i<count($list);$i++){
    if($list[$i] % 2 == 0){
        $list[$i] = $list[$i] + 1;
    }
}
afficherTabEntiers($list);

