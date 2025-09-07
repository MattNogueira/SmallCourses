<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(14, 15);
echo soma(1, 2, 3);

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

function membros($titulo, ...$dependentes) {
    echo "Titular: $titulo <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}
echo '<br>';
membros('Ana Silva', 'Pedro', 'Rafaela', 'Amanda');

echo '<br>';
membros('Roberto', 'Junior');