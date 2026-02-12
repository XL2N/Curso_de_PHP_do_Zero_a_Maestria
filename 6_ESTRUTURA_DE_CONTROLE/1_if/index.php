<?php

    // CONHECENDO ESTRUTURA IF

    # Condição verdadeira
    if(5 > 2){
        echo "Deu certo! Entrou no IF <br>";
    }

    # Condição falsa
    if(2 >= 5){
        echo "Não vai entrar no IF, porque deu false <br>";
    }

    # Utilizando operador lógico
    if( 10 === 10 && 9 > 3){
        echo "Deu certo! Entrou no IF 2 <br>";
    }

    # Utilizando variável
    $a = 10;
    $b = 5;

    $c = "Deu certo! Entrou no IF 2 <br>";

    if( $a >= $b ){
        echo $c;
    }