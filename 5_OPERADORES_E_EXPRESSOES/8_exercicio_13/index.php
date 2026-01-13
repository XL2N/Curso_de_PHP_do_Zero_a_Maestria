<?php

    // EXERCÍCIO 12
    // Teste o operador de resto em duas divisões
    // Imprima não exata e outra exata

    # Variaveis
    $a = 10;
    $b = 5;
    $c = 3;

    # Divisão exata
    echo $a . '/' . $b . ' = ';
    echo $a / $b;
    echo " <br>";

    // Resto 
    echo 'Resto:';
    echo $a % $b;
    echo " <br>";
    echo " <br>";

    # Divisão não exata
    echo $a . '/' . $c . ' = ';
    echo $a / $c;
    echo " <br>";

    // Resto
    echo 'Resto: ';
    echo $a % $c;
    echo " <br>";
?>