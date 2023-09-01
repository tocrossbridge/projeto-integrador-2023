<!--
    4 – Efetue um algoritmo PHP que receba quatro notas de um aluno, calcule e imprima
    a média aritmética das notas e a mensagem de aprovado para média superior ou igual
    a 7.0, a mensagem de recuperação para média entre 4.0 e 6.9 e a mensagem de
    reprovado para média inferior a 4.0.
-->

<?php
echo "Informe a primeira nota: ";
$nota1 = floatval(fgets(STDIN));

echo "Informe a segunda nota: ";
$nota2 = floatval(fgets(STDIN));

echo "Informe a terceira nota: ";
$nota3 = floatval(fgets(STDIN));

echo "Informe a quarta nota: ";
$nota4 = floatval(fgets(STDIN));

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7.0) {
    echo "Média: $media - Aprovado\n";
} elseif ($media >= 4.0 && $media < 7.0) {
    echo "Média: $media - Recuperação\n";
} else {
    echo "Média: $media - Reprovado\n";
}
?>