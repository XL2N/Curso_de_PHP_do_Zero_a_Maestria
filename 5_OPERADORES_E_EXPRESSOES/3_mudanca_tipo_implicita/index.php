<?php

    // CONHECENDO MUDANÇA DE TIPO IMPLÍCITA

    # Mudando de inteiro para float
    echo 5 / 2; 
    echo "<br>";

    // Verificando o tipo da variável
    if(is_float(5 / 2)){
        echo "É float <br>";
    }

    # Mudando de inteiro para string
    echo 2 . 3; // concatenando números
    echo "<br>";

    // Verificando o tipo da variável
    if(is_string(2 . 3)){
        echo "É string <br>";
    }

    # Exemplo de concatenação de strings
    $nome = "Giselle";
    $sobrenome = "Novaes";

    // Concatenando as variáveis com uso do (.)
    $nomeCompleto = $nome . " " . $sobrenome;

    // Exibindo o resultado
    echo $nomeCompleto;
    echo "<br>";

?>