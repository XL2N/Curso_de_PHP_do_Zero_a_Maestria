<?php

    // CONHECENDO OPERADORES DE IDENTICO A

    # Definindo variáveis
    $a = 1;
    $b = "1";

    // Testando diferenças com (DIFERENTE '!=')
    if($a != $b){ # False
        echo "A é diferente de B 1 <br>";
    }

    // Testando diferenças com (NÃO IDENTICO '!==')
    if($a !== $b){ # True
        echo "A é diferente de B 2 <br>";
    }

    # Exxemplo Hardcoded

    // Testando diferenças com numeros inteiros
    if(1 !== 2){
        echo "Não é identico 1 <br>";
    }

    // Testando diferenças com diferentes tipos de dados
    if(1 !== "1"){
        echo "Não é identico 2 <br>";
    }

    // Testando diferenças com diferentes tipos de dados
    if( [] !== "abc"){
        echo "Não é identico 3 <br>";
    }