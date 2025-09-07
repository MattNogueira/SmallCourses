<div class="titulo">Desafio Palíndromo</div>

<form method="post">
    <label for="palavra">Palavra:</label>
    <input type="text" name="palavra">
    <label for="opcao">Opção</label>
    <select name="opcao" id="opcao">
        <option value="0">Escolha...</option>    
        <option value="1">FOR</option>
        <option value="2">Bib. String</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

//Receber uma string e detectar um palíndromo

//Usando FOR

$palavra = strtolower($_POST['palavra']);

function palindromofor($palavra) {
    $alvo = mb_strlen($palavra, 'utf-8') -1;
    for ($i = 0; $i <= $alvo; $i++) {
        if ($palavra[$i] !== $palavra[$alvo - $i]) {
            return "Não";
        }
    }
    return "Sim";
}

//Usando função string

function palindromoBib($palavra) {
    return $palavra === strrev($palavra) ? "Sim<br>" : "Não<br>";
}

switch ($_POST['opcao']) {
    case 1:
        echo palindromofor($palavra) . ' ';
        break;
    case 2:
        echo palindromoBib($palavra) . ' ';
        break;
    default:
        echo "<br>";
        break;
}