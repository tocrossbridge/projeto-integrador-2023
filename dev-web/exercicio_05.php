<!--
    5 – Efetue um algoritmo PHP usando o comando CASE onde o usuário entrará com o
    número de cada operação (dentro de uma varável mesmo) e o sistema responderá
    deverá imprimir o nome da operação para o usuário, sendo:
    1. Saldo Conta Corrente
    2. Sacar dinheiro
    3. Fazer empréstimo
    4. Sair
    No caso do usuário entrar com um valor diferente das opções acima a resposta do
    sistema deverá ser: Opção Inválida.
-->

<?php
echo "Operações disponíveis:\n";
echo "1. Saldo Conta Corrente\n";
echo "2. Sacar dinheiro\n";
echo "3. Fazer empréstimo\n";
echo "4. Sair\n";

$opcao = intval(readline("Digite o número da operação desejada: "));

switch ($opcao) {
    case 1:
        echo "Operação selecionada: Saldo Conta Corrente\n";
        break;
    case 2:
        echo "Operação selecionada: Sacar dinheiro\n";
        break;
    case 3:
        echo "Operação selecionada: Fazer empréstimo\n";
        break;
    case 4:
        echo "Operação selecionada: Sair\n";
        break;
    default:
        echo "Opção Inválida\n";
        break;
}
?>