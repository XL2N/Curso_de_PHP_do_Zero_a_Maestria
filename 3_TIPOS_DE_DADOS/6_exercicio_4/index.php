<?php

    // EXERCÍCIO 4 -IMPRIMA 3 NUMEROS FLOATS

    # Caracteristicas humanas
    $altura = 1.67;
    $peso = 68.2;
    $temperatura = 36.6;

    # Imprimindo caracteristicas
    echo $altura;
    echo "<br>";
    echo $peso;
    echo "<br>";
    echo $temperatura;
    echo "<br>";

    # Verificando se é float usanso is_float
    if(is_float($altura)){
        echo "<br>";
        echo "É Float! <br>";
    }

    # Verificando se é float usanso is_int
    if(is_int($altura)){
        echo "<br>";
        echo "É Int! <br>";
    }

    # Outros valores floats
    echo "<br>";
    echo 0.1;
    echo "<br>";
    echo 0.11;
    echo "<br>";
    echo 0.111;
    echo "<br>";

?>