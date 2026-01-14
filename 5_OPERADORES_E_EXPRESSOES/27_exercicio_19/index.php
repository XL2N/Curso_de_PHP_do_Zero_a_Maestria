<?php

    // EXERCICIO 19
    // Converta os seguintes dados para int com o operador de cast;
    // + "testando"
    // + 12.9
    // + true
    // + [1,2,3]
    // E veja os resulltados

    # Variaveis
    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1,2,3];

    # Mostrando os valores convertidos
    
    // Valor de A
    echo $a;
    echo "<br>";
        // Outro exemplo com string
        echo (int) "abc";
        echo "<br>";

    // Valor de B
    echo $b;
    echo "<br>";
        // Outro exemplo com float
        echo (int) 9.99;
        echo "<br>";

    // Valor de C
    echo $c;
    echo "<br>";
        // Outro exemplo com boolean
        echo (int) false;
        echo "<br>";
    
    // Valor de D
    echo $d;
    echo "<br>";
        // Outro exemplo com array
        echo (int) [];
        echo "<br>";

?>