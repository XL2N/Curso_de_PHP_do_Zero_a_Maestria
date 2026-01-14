<?php

    // CONHECENDO OPERADOR OR (||)

    # Exemplos com as possibilidades da tabela verdade

    // True OU True
    if(5 > 2 || 3 < 4){
        echo " Operação VERDADERA OU VERDADERA <br>";
    }

    // True OU False
    if(5 > 2 || 30 < 4){
        echo " Operação VERDADERA OU FALSA <br>";
    }

    // False OU True
    if(5 > 20 || 3 < 4){
        echo " Operação FALSA OU VERDADERA <br>";
    }

    // False OU False
    if(5 > 20 || 30 < 4){
        echo " Operação FALSA OU FALSA <br>";
    }

    # Exemplos com variáveis

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    // True OU True = True
    if($a > $b || $d > $c){ 
        echo "A Operação é verdadeira 1 <br>";
    }

    // (False OU True) E True = True
    if(($a > $b || $d > $c) && $c < $d){
        echo " A Operação é verdadeira 2 <br>";
    }

    // (True E False) OU True = True
    if(($a > $b && $d < $c) || $c < $d){
        echo " A Operação é verdadeira 3 <br>";
    }
?>