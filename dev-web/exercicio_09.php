<!--
    9– Crie um vetor em PHP que receba 10 países. Imprima todos os países com o laço de
    repetição em ordem numérica. Ficando:
    1-PrimeiroPaís
    2-SegundoPaís
    3-TerceiroPáis
    E assim até chegar aos 10.
-->

<?php
$paises = array(
    "País 01",
    "País 02",
    "País 03",
    "País 04",
    "País 05",
    "País 06",
    "País 07",
    "País 08",
    "País 09",
    "País 10"
);

for ($i = 0; $i < count($paises); $i++) {
    echo ($i + 1) . "-" . $paises[$i] . "\n";
}
?>