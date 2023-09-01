<!--
    3 – Efetue um algoritmo PHP que receba a altura e o sexo de uma pessoa, calcule e
    imprima o seu peso ideal, utilizando as seguintes fórmulas:
    • para homens: (72.7 * A) – 58
    • para mulheres: (62.1 * A) - 44.7
-->
<?php
echo "Informe a altura em metros: ";
$altura = trim(fgets(STDIN));

echo "Informe o sexo(homem/mulher): ";
$sexo = trim(fgets(STDIN));

if ($sexo === "homem") {
    $pesoIdeal = (72.7 * $altura) - 58;
} elseif ($sexo === "mulher") {
    $pesoIdeal = (62.1 * $altura) - 44.7;
} else {
    echo "Sexo inválido.";
}

echo "O peso Ideal é de " . number_format($pesoIdeal, 2, '.', ',') . " kg";
?>