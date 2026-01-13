<?php

    // EXERCÍCIO 12
    // Crie uma operação com cada um dos operadores básicos
    // Cada operação deve estar em uma variável diferente
    // Imprima cada uma das etapas

    # Declarando as variáveis
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;

    # Calculando as etapas:  
    # ( + ) -> ( * ) -> ( - ) -> ( / ) 

    // Operação de soma
    $soma = $a + $b;
    echo $a . " + " . $b . " = " . $soma . "<br>";

    // Operação de multiplicação
    $multiplicacao = $soma * $c;
    echo $soma . " * " . $c . " = " . $multiplicacao . "<br>";
    
    // Operação de subtração
    $subtracao = $multiplicacao - $d;
    echo $multiplicacao . " - " . $d . " = " . $subtracao . "<br>";

    // Operação de divisão
    $divisao = $subtracao / $e;
    echo $subtracao . " / " . $e . " = " . $divisao . "<br>";

?>