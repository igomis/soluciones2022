<?php
declare(strict_types=1);
function funcionArgumentosNombre($a, $b = 2, $c = 4) {
    echo "$a $b $c";
}
funcionArgumentosNombre(c: 3, a: 1); // "1 2 3"
funcionArgumentosNombre(1, c: 3); // "1 2 3"

function suma(int $a, int $b) : int {
    return $a + $b;
}

$num = 33;
echo suma(10, 30);
echo suma(10, $num);
echo suma("10", 30); // error por tipificación estricta, sino daría 40

