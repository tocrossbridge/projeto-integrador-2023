// Atividade de Algoritmo

// 1 - Repetir exatamente o que o usuário digitar. Pode receber valores reais um de cada vez. 
#include <stdio.h>

void main() {
    int value;

    printf("Digite um valor real: ");
    scanf("%d", &value);
    printf("Você digitou: %d\n", value);
}

// 2 - PROGRAMA CADASTRO: solicita NOME, ENDEREÇO e TELEFONE do usuário e depois mostra os dados digitados em uma única linha.
// Online C compiler to run C program online
#include <stdio.h>

void main() {
    char name[200];
    char address[200];
    char phone[200];

    printf("Digite o nome: ");
    scanf("%s", &name);
    
    printf("Digite o endereço: ");
    scanf("%s", &address);
    
    printf("Digite o telefone: ");
    scanf("%s", &phone);
    
    printf("Nome: %s - Endereço: %s - Telefone: %s", name, address, phone);
}

// 3 - PROGRAMA TROCA: o usuário digita um valor na variável X e outro valor na variável Y. O programa deve trocar os valores, passando Y a ter o valor de X e X o valor de Y
#include <stdio.h>

void main() {
    int x;
    int y;
    int z;
    printf("Digite um valor para a variável X: ");
    scanf("%d", &x);
    
    printf("Digite um valor para a variável Y: ");
    scanf("%d", &y);
    
    z = x;
    x = y;
    y = z;
    
    printf("%d - %d", x,y);
}