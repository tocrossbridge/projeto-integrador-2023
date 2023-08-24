// Exercício 1: Verificação de Idade
// Escreva um programa que solicite a idade do usuário e, com base nessa idade, exiba uma mensagem correspondente:
// 
// Se a idade for menor que 18, exiba: "Você é menor de idade."
// Caso contrário, exiba: "Você é maior de idade."
#include <stdio.h>
void main(){
    int age;

    printf("Digite sua idade:\n");
    scanf("%d", &age);
    
   age > 18 ? printf("Você é maior de idade.") : printf("Você é menor de idade.");
}



// Exercício 2: Calculadora de IMC
//
// Escreva um programa que calcule o Índice de Massa Corporal (IMC)
// com base no peso (em kg) e na altura (em metros) fornecidos pelo usuário.
// Em seguida, classifique o IMC em uma das categorias abaixo:
// 
// Abaixo do peso: IMC < 18.5
// Peso normal: 18.5 <= IMC < 24.9
// Sobrepeso: 24.9 <= IMC < 29.9
// Obeso: IMC >= 30
#include <stdio.h>
#include <math.h>

void main() {
    double height, weight, imc;
    
    printf("Digite sua altura em metros:");
    scanf("%lf", &height);
    
    printf("Digite seu peso em kilos:");
    scanf("%lf", &weight);
    
    imc = weight/(height * height);
    
    if(imc < 18.5){
        printf("Abaixo do peso.");
    }else if(18.5 <= imc && imc < 24.9){
        printf("Peso normal.");
    }else if(24.9 <= imc && imc < 29.9){
        printf("Sobrepeso.");
    }else if(imc >= 30){
        printf("Obeso.");
    }else{
        printf("Erro. Contate o programador.");
    }
    
}


// Exercício 3: Verificação de Número Par ou Ímpar
//
// Escreva um programa que solicite um número inteiro ao usuário
// e determine se o número é par ou ímpar. Exiba uma mensagem correspondente.
#include <stdio.h>
void main(){
    int number;
    printf("Digite um número:");
    scanf("%d", &number);

    (number % 2) == 0 ? printf("Par") : printf("Ímpar");
}


// Exercício 4: Cálculo de Desconto
// Escreva um programa que solicite o valor total de uma compra ao usuário
// e calcule o valor com desconto. Se o valor total for maior ou igual a R$ 100,
// aplique um desconto de 10%. Caso contrário, não aplique desconto algum.
#include <stdio.h>
void main(){
    double totalPrice, discountPercentage, discountAmount;
    
    printf("Digite o valor total da compra:");
    scanf("%lf", &totalPrice);
    
    printf("Digite o percentual do desconto:");
    scanf("%lf", &discountPercentage);

    if(totalPrice >= 100){
        discountAmount = totalPrice - (totalPrice * discountPercentage/100);
        printf("%lf", discountAmount);
    }
}


// Exercício 5: Classificação de Triângulos
// 
// Escreva um programa que solicite os comprimentos dos lados de um triângulo e determine sua classificação:
// 
// Triângulo equilátero: todos os lados têm o mesmo comprimento.
// Triângulo isósceles: dois lados têm o mesmo comprimento.
// Triângulo escaleno: todos os lados têm comprimentos diferentes.
#include <stdio.h>
void main(){
    double side1, side2, side3;

    printf("Digite o número do primeiro lado do triângulo: ");
    scanf("%lf", &side1);

    printf("Digite o número do segundo lado do triângulo: ");
    scanf("%lf", &side2);
    
    printf("Digite o número do terceiro lado do triângulo: ");
    scanf("%lf", &side3);

    if(side1 == side2 && side2 == side3){
        printf("É um triângulo equilátero (todos os lados tem o mesmo comprimento)");
    }else if(side1 == side2 || side2 == side3 || side3 == side1){
        printf("É um triângulo isósceles (apenas dois lados têm o mesmo comprimento)");
    }else{
        printf("É um triângulo escaleno (todos os lados tem comprimentos diferentes)");
    }
}