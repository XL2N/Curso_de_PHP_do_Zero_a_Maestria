<?php

    // VERIFICANDO SE O VALOR É UMA STRING

    # variaveis de exemplo
    $str = "Giselle";
    $num = 12;

    # verificando se é string
    if(is_string($str)){
        echo "$str É uma String! <br>";
    }

    if(is_string($num)){
        echo "$num É uma String! <br>";
    }

    # versão hardcoded
    if(is_string("abc")){
        echo "É uma string! <br>";
    }
?>