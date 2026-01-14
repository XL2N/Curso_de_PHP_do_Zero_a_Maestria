<?php

    // CONHECCENDO OPERADOR AND (&&)

    # Exemplos com as possibilidades da tabela verdade

    if(5 > 10 && 10 > 5){ // False e True
        echo "Entrou no IF 1 <br>";
    }

    if(50 > 10 && 10 > 5){ // True e True
        echo "Entrou no IF 2 <br>";
    }

    if(50 > 10 && 10 > 500){ // True e False
        echo "Entrou no IF 3 <br>";
    }

    if(50 > 10 && 10 > 500){ // False e False
        echo "Entrou no IF 4 <br>";
    }

    # Exemplos com variáveis

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    // exemplo True e True
    if($a > $b && $c == $d){ 
        echo "Entrou no IF 5 <br>";
    }

    //exemplo True e True
    if($b <= $a && $c >= $d){
        echo "Entrou no IF 6 <br>";
    }

    // exemplo False e False
    if($b === $a && $c > $d){
        echo "Entrou no IF 7 <br>";
    }

    # Exemplo concatenando condições
    // (True e True) e True
    if(($b <= $a && $c >= $d) && $a > $b){
        echo "Entrou no IF 8 <br>";
    }

    // True e True e False
    if($b <= $a && $c >= $d && $c === $a){
        echo "Entrou no IF 9 <br>";
    }
?>