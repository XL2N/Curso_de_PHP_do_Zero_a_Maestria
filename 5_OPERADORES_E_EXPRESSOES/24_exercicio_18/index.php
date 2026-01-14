<?php

    // EXERCICIO 18
    // Verifique as seguintes operações com OR
    // a) 12 < 5 OR "João" === "João"
    // b) 1 < 5 OR 1
    // c) 20 === "20" AND 51 >= 31

    # Operação a)
    if(12 < 5 || "João" === "João"){
        echo " A operação é verdadeira 1 <br>";
    }

    # Operação b)
    if(1 < 5 || 1){
        echo " A operação é verdadeira 2 <br>";
    }

    # Operação c)
    if(20 === "20" && 51 >= 31){
        echo " A operação é verdadeira 3 <br>";
    }

    # Operação teste
    if(20 == "20" && 51 >= 31){
        echo " A operação é verdadeira teste <br>";
    }