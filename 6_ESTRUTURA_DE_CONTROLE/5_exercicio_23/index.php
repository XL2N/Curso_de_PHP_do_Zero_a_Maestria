<?php

    // EXERCÍCIO 23
    // C

    # Variáveis 
    $ana = 20;
    $bruno = 18;
    $carla = 16;
    $maioridade = 18;

    # Mensagens
    $msg_maioridade = "Você é MAIOR de idade <br>";
    $msg_menoridade = "Você não é MAIOR de idade <br>";

    # Verificações
    echo "Ana - ";
    if($ana >= $maioridade){
        echo $msg_maioridade;
    } else {
        echo $msg_menoridade;
    }

    echo "Bruno - ";
    if($bruno >= $maioridade){
        echo $msg_maioridade;
    } else {
        echo $msg_menoridade;
    }

    echo "Carla - ";
    if($carla >= $maioridade){
        echo $msg_maioridade;
    } else {
        echo $msg_menoridade;
    }