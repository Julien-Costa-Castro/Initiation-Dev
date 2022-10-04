<?php
    require "fonction-max2.php";
    function max3(int $a,$b,$c):int{
        $m=max2($a,$b);
        return max2($m,$c);
    }
