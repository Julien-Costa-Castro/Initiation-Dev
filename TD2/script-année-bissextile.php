<?php
    $n = readline();
    if ((($n %4 == 0 ) && ($n %100 != 0)) || ($n %400 == 0)) echo"année bissextile";
    else echo"année non bissextile";
