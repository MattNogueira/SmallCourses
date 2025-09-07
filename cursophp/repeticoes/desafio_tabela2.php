<div class="titulo">Desafio Tabela 2</div>

<!--
- Criar dois forms em um form
- Gerar as colunas e as linhas baseando-se no valor dos inputs
-->

<form action="" method="post">
    <label for="linhas">Linhas</label>
    <input type="number" name="linhas">
    <label for="colunas">Colunas</label>
    <input type="number" name="colunas">
    <button type="submit">Criar Tabela</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    table, td {
        border: 1px solid #444;
    }

    table {
        border-collapse: collapse;
    }

    td {
        min-width: 100px;
    }
    .alinhar {
        display: flex;
        justify-content: center;
        margin: 50px;
        text-align: center;
    }
</style>

<?php
$num = 1;
echo '<div class="alinhar">';
echo '<table>';
for ($c = 0; $c < $_POST['linhas']; $c++) {
    echo '<tr>';
    for ($l = 0; $l < $_POST['colunas']; $l++) {
        echo "<td> {$num} </td>";
        $num++;
    }
    echo '</tr>';
}
echo '</table>';
echo '</div>';