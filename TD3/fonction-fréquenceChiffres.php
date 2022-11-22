<?php
function fréquenceChiffres(int $n): array
{
    $b = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    if ($n == 0) {
        $b[0]++;
    } else {
        while ($n > 0) {
            $b[$n % 10]++;
            $n = intdiv($n, 10);
        }
    }
    return $b;
}

print_r(fréquenceChiffres(123));
print_r(fréquenceChiffres(0));