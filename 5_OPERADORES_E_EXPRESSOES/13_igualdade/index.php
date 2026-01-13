<?php

    // CONHECENDO OPERADORES DE IGUALDADE

    # Exemplos hardcoded

    // exemplo True
    if (5 == 5) {
        echo "Comparação Verdadeira 1<br>";
    }

    // exemplo False
    if (5 == 3) {
        echo "Comparação Verdadeira 2<br>";
    }

    # Exemplos com variáveis
    $a = 10;
    $b = 10;
    $c = 100;

    // exemplo True
    if ($a == $b) {
        echo "Comparação Verdadeira 3<br>";
    }

    // exemplo False
    if ($a == $c) {
        echo "Comparação Verdadeira 4<br>";
    }

    # Exemplos com diferentes tipos de dados

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

?>