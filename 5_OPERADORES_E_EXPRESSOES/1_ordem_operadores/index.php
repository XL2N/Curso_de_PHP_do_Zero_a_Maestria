<?php

    // CONHECENDO A ORDEM DOS OPERADORES

    # Imprimindo valores de expresão matemática
    echo 3 + 2 * 5 ; // expressão default
    echo "<br>";
    echo (3 + 2) * 5 ; // expressão com parênteses
    echo "<br>";

    # Comparando o uso hardcoded e com variaveis
    // expressão hardcoded 
    echo 5 + 2 / 10 ;
    echo "<br>";

    // criando variaveis
    $a = 5 ;
    $b = 2 ;
    $c = 10 ;

    // expressão usando variaveis
    echo $a + $b / $c ;
    echo "<br>";
    echo $c + $b / $a ; 
    echo "<br>";

    # expressão dentro de uma variavel
    $resultado = $a + $b / $c ;
    
    echo $resultado ;
    echo "<br>";

?>