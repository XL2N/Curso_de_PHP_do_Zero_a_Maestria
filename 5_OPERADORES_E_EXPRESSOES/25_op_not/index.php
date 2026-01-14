<?php

    // CONHECENDO OPERADOR NOT (!)

    # Exemplos com as possibilidades da tabela verdade

    // True -> False
    if(!(5 > 2)){
        echo "A operação é verdadeira 1 <br>";
    }

    // False -> True
    if(!(5 > 20)){
        echo "A operação é verdadeira 2 <br>";
    }

    # Exemplos com variáveis
    $a = 10;
    $b = 20;

    // False -> True
    if(!($a >= $b)){
        echo "A operação é verdadeira 3 <br>";
    }