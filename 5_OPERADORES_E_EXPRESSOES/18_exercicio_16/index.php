<?php

    // EXERCICIO 16
    // Insira o valor 5 em uma variável, e o valor 3 em outra;
    // Teste os operadores de: igualdade, diferença, identico e não identico;

    # Definindo variáveis
    $valor1 = 5;
    $valor2 = 3;

    # Operador de Igualdade
    if($valor1 == $valor2){
        echo $valor1 . " é igual a " . $valor2 . "<br>";
    }

    # Operador de Diferença
    if($valor1 != $valor2){
        echo $valor1 . " é diferente de " . $valor2 . "<br>";
    }

    # Operdor de identico
    if($valor1 === $valor2){
        echo $valor1 . " é identico a " . $valor2 . "<br>";
    }

    # Operador de não identico
    if($valor1 !== $valor2){
        echo $valor1 . " não é identico a " . $valor2 . "<br>";
    }