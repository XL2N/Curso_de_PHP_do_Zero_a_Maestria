<?php

    // CONHECENDO ESCOPO LOCAL

    # Criando uma variavel global
    $x = 10;

    //Imprimindo o valor da variavel global
    echo "$x GLOBAL <br>";

    # Criando uma função com variavel local
    function teste() {
        // variavel local    
        $y = 5;
        // Imprimindo o valor da variavel local
        echo "$y LOCAL 1 <br>";
    }

    // Chamando a função
    teste();

    # Criando outra função de variavel local
    function testando (){
        // variavel local
        $x = 15;
        // Imprimindo o valor da variavel local
        echo "$x LOCAL 2 <br>";
    }

    // Atualizando o valor da variavel global
    $x = 25;

    // Chamando a função 2
    testando();

    // Chamando a função 1 novamente
    teste();

    // Imprimindo o valor da variavel global
    echo "$x GLOBAL ATUALIZADO <br>";

?>