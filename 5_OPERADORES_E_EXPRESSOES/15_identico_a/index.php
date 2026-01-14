<?php

    // CONHECENDO OPERADORES DE IDENTICO A

    # Exemplos hardcoded
    
    // exemplo True (comparação de valor e tipo)
    if(5 === 5) {
        echo "Comparação Verdadeira 1<br>";
    }

    // exemplo False (comparação de valor e tipo)
    if(5 === "5") {
        echo "Comparação Verdadeira 2<br>";
    }

    # Exemplos com variáveis
    $num = 20;    // inteiro
    $str = "20";  // string

    // exemplo True (comparação de valor)
    if ($num == $str) {
        echo "Comparação Verdadeira 5<br>";
    }

    // exemplo False (comparação de valor e tipo)
    if ($num === $str) {
        echo "Comparação Verdadeira 6<br>";
    }
