<div class="titulo">Desafio For</div>

<!--
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++
-->

<?php

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "#";
    }
    echo "<br>";
}

echo "<hr>";

for($i = '#'; $i !== '######'; $i .= '#') {
    echo "$i <br>";
}