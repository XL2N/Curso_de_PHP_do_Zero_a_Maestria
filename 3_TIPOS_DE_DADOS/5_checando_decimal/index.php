<?php

    // VERIFICANDO SE O VALOR É UM DECIMAL (FLOAT)

    // Exemplo usando Variaveis
    $a = "teste";
    $b = 1.5;

    # caso False
    if(is_float($a)){ 
        echo "É um Float! <br>";
    }

    # caso True
    if(is_float($b)){ 
        echo "É um Float! 2 <br>";
    }

    // Exemplo hardcoded
    
    # caso True
    if(is_float(6565.63)){
        echo "É um Float! 3 <br>";
    }

    # caso False
    if(is_float("teste")){
        echo "É um Float! 4 <br>";
    }
?>