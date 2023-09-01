<!--
    6– Efetue um algoritmo PHP que receba dois valores quaisquer e imprime todos os valores
    intermediários a ele, veja exemplo:
    Primeiro Valor = 5
    Segundo Valor = 15
    Imprime: 6 7 8 9 10 11 12 13 14 
-->

<?php
$primeiroValor = intval(readline("Digite o 1º valor: "));
$segundoValor = intval(readline("Digite o 2º valor: "));

if ($primeiroValor < $segundoValor) {
    for ($i = $primeiroValor + 1; $i < $segundoValor; $i++) {
        echo $i . " ";
    }
} elseif ($primeiroValor > $segundoValor) {
    for ($i = $segundoValor + 1; $i < $primeiroValor; $i++) {
        echo $i . " ";
    }
} else {
    echo "Valores inputados são iguais. Sem valores intermediários.";
}
?>
