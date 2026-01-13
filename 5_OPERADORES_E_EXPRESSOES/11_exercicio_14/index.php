<?php

    // EXERCÍCIO 14
    // Crie uma variável saudação, nome e outra sobrenome;
    // Imprima com echo a concatenação de saudação, nome e sobrenome;

    # Variáveis
    $saudacao = "Bem-vindo(a), ";
    $nome = "Giselle ";
    $sobrenome = "Souza";

    # Impressão concatenada
    echo $saudacao . $nome . $sobrenome . "!";

    # Outra forma de imprimir
    echo "<br>";

    // Armazenando em uma variável
    $frase = $saudacao . $nome . $sobrenome . "!";
    
    // Imprimindo a variável
    echo $frase;

?>