<?php

    // CONHECENDO OPERADORES DE DIFERENÇA (!=)

    # Definindo variáveis
    $a = 3;
    $b = 4;

    // Testando diferenças das variáveis
    if($a != $b){
        echo "Testando diferença 1 <br>";
    }

    // Testando diferenças da variável com um valor
    if($a != 3){
        echo "Testando diferença 2 <br>";   
    }

    // Testando diferenças com diferentes dados
    if(false != "teste"){
        echo "Testando diferença 3 <br>";
    }

    if(3 != "5"){
        echo "Testando diferença 5 <br>";
    }

    // Testando diferenças com diferentes tipos de dados
    if(3 != "3"){
        echo "Testando diferença 4 <br>";
    }
