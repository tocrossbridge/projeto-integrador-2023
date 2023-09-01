<!--
    2 – Efetue um algoritmo PHP que calcule e imprima o salário reajustado de um
    funcionário de acordo com a seguinte regra:
    • salários até 1000, reajuste de 50%
    • salários maiores que 1000, reajuste de 30%
-->
<?php
$salarioAtual = 2500;

if ($salarioAtual <= 1000) {
    $reajuste = $salarioAtual * 0.5;
} else {
    $reajuste = $salarioAtual * 0.3;
}

$salarioReajustado = $salarioAtual + $reajuste;

echo "Salário Atual: R$ " . number_format($salarioAtual, 2, '.', ',') . "\n";
echo "Salário Reajustado: R$ " . number_format($salarioReajustado, 2, '.', ',');
?>