<!--
    1 – Faça o que se pede:
    A – Crie uma variável chamada “clientes”.
    B– Essa variável “clientes” será uma array multidimensional que conterá dados de
    clientes.
    C – Para cada item da array você deverá definir um índice(chave). Sendo: nome,
    endereço, telefones.
    D– Dentro do índice(chave) telefones será criado as opções de residencial e
    comercial.
    E – Os valores dos clientes devem ser fictícios. Não esqueça de preenchê-los.
    F – Dentro da array clientes você deverá criar ao menos 3 clientes.
    G – Exiba o nome e telefone residencial de cada cliente.
-->

<?php
$clientes = array(
    array(
        "nome" => "Fulano",
        "endereço" => "Rua Abcde",
        "telefones" => array(
            "residencial" => "(XX) XXXXX-XXXX",
            "comercial" => "(XX) XXXXX-XXXX"
        )
    ),
    array(
        "nome" => "Ciclano",
        "endereço" => "Rua 13245678",
        "telefones" => array(
            "residencial" => "(XX) XXXXX-XXXX",
            "comercial" => "(XX) XXXXX-XXXX"
        )
    ),
    array(
        "nome" => "Beltrano",
        "endereço" => "Rua 98765432",
        "telefones" => array(
            "residencial" => "(XX) XXXXX-XXXX",
            "comercial" => "(XX) XXXXX-XXXX"
        )
    )
);

foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente["nome"] . "\n";
    echo "Telefone residencial: " . $cliente["telefones"]["residencial"] . "\n\n";
}
?>