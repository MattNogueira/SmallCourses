<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elsa", "Rapunzel", "Branca de Neve", "Cinderela"];

echo "<div center><h1>" . $nomes[array_rand($nomes)] . "</h1></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>