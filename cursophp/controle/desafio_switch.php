<div class="titulo">Desafio Switch</div>

<form action="" method='post'>
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option->
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metros -> Km</option>
        <option value="km-metro"> Km -> Metros</option>
        <option value="cel-fh">Celsius -> Fahrenheit</option>
        <option value="fh-cel">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'cel-fh':
        $graus = $param * FATOR_CEL_FH + 32;
        $mensagem = "$param °C = $graus °F";
        break;
    case 'fh-cel':
        $graus = ($param - 32) / FATOR_CEL_FH;
        $mensagem = "$param °C = $graus °F";
        break;
    default:
        $mensagem = "Aguardando cálculo.";
}

echo "<p>$mensagem</p>";


// Minha tentativa falha
// $opcao = $_POST['conversao'];
// $valor = $_POST['param'];
// $resultado = null;

// switch($opcao) {
//     case ('km-milha'):
//         $resultado = $valor * 0.621371;
//         break;
//     case ('milha-km'):
//         $resultado = $valor * 1.60934;
//         break;
//     case ('metro-km'):
//         $resultado = $valor / 1000;
//         break;
//     case ('km-metro'):
//         $resultado = $valor * 1000;
// }

// echo "<br>Resultado: " . $resultado;

