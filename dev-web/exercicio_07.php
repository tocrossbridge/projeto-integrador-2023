<!--
    7 – Efetue um algoritmo que receba uma valor, calcule exiba a tabuada do mesmo.
    Ex: Recebeu valor 5.
    5x1=5
    5x2=10
    5x3=15
    5x4=20
    E assim consecutivamente até 10.
-->

<?php
$numero = intval(readline("Qual tabuada você quer saber? (digite o número): "));

echo "Tabuada do $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>