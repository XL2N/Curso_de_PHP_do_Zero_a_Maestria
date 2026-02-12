<?php

    // EXERCÍCIO 22
    // Crie variáveis que recebem idades;
    // Cheque se as idades são maiores ou iguais a 18;
    // Se sim, Imprima que a pessoa é maior de idade.

    # Variáveis
    $idade_A = 20;
    $idade_B = 18;
    $idade_C = 16;
    $maioridade = 18;
    $msg= "Você é maior de idade <br>";


    # Verificações
    if($idade_A >= $maioridade){
        echo "A - ";
        echo $msg;
    }

    if($idade_B >= $maioridade){
        echo "B - ";
        echo $msg;
    }

    if($idade_C >= $maioridade){
        echo "C - ";
        echo $msg;
    }
    