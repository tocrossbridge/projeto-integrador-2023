<!--
    10– Efetue um algoritmo PHP que receba 2 valores escritos pelo usuário e imprima os números
    de dois em dois entre eles. Faça a verificação caso o usuário escreva o segundo valor maior
    que o primeiro.
-->

<?php
$valor1 = intval(readline("Digite o primeiro valor: "));
$valor2 = intval(readline("Digite o segundo valor: "));

if ($valor2 <= $valor1) {
    echo "O 2º valor deve ser maior que o 1º :((";
} else {
    $numero = $valor1;
    while ($numero <= $valor2) {
        echo $numero . " ";
        $numero += 2;
    }
    echo "\n";
}
?>