<div class="titulo">Desafio Equação</div>

<?php

$a1 = (6 * (3 + 2))**2;
$a2 = 3 * 2;
$b1 = (1 - 5) * (2 - 7);
$b2 = 2;
$r2 = 10**3;

$A = $a1 / $a2;
$B = ($b1 / $b2)**2;
$r1 = ($A - $B)**3;

$R = $r1 / $r2;

echo "O resultado final é: " . $R . ".";