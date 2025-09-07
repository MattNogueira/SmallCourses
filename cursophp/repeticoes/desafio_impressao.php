<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contém índice par;
- Resolver com for e foreach
- Valores esperados: AAA, BBB, CCC
-->

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

echo "FOREACH<br>";

foreach($array as $i => $item) {
    if ($i % 2 === 0) {
        echo "$item ";
    }
}

echo "<br>FOR<br>";

for($i = 0; $i < count($array); $i += 2) {
    echo "$array[$i] ";
}