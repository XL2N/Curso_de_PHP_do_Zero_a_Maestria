<?php

    // EXERCÍCIO 24
    // Crie algumas variáveis com tipos de dados diferentes:
    // STRING / INT / BOOLEAN, Por exemplo;
    // Cheque se a variávei é um inteiro;
    // Caso sim, apresente uma mmensagem confirmando o tipo de dado;
    // Caso não, apresente outra mensagem.

    # Variáveis
    $nome = "Giselle";
    $idade = 21;
    $altura = 1.67;

    # Mensagens
    $msg_inteiro = "é do tipo INTEIRO  <br>";
    $msg_else = "não é do tipo INTEIRO  <br>";
    
    # Verificação
    if(gettype($nome) === "integer"){
        echo "Nome " . $msg_inteiro;
    } else {
        echo "Nome " . $msg_else;
    }

    if(gettype($idade) === "integer"){
        echo "Idade " . $msg_inteiro;
    }else {
        echo "Idade " . $msg_else;
    }

    if(gettype($altura) === "integer"){
        echo "Altura " . $msg_inteiro;
    }else {
        echo "Altura " . $msg_else;
    }