<?php

    //CONHECENDO A ESTRUTURA ELSE

    # Exemplo IF verdadero
    if(5 > 2){
        echo "Entou no IF 1 <br>";
    } else{
        echo "Entrou no ELSE 1 <br>";
    }

    # Exemplo IF falso
    if("teste" == 5){
        echo "Entou no IF 2 <br>";
    } else{
        echo "Entrou no ELSE 2 <br>";
    }

    # Exemplo com variável

    $a = 10;
    $b = 20;

    if($a > $b){
        echo "Entou no IF 3 <br>";
    } else{
        echo "Entrou no ELSE 3 <br>";
    }

    # Exemplo que prova o uso do escopo global 
    
    $x = "Entrou no ELSE 4 <br>";

    if($a > $b){
        echo "Entou no IF 4 <br>";
    } else{
        echo $x;
    }

?>


