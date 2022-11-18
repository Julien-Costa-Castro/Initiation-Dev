<?php
require ("procedure-repeteCarac.php");
function pyramideSimple(int $h, string $c): void{
    for($i = 0; $i != $h;$i++){
        repeteCarac($h-$i," ");
        repeteCarac($i*2+1,$c);
        echo "\n";
    }
}


