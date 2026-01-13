<?php

    // CONHECENDO ESCOPO ESTÁTICO

    # Criando uma  Função sem static
    function teste(){

        // Variável local
        $a = 0;
        $a++; // Incrementa +1

        echo "$a <br>";

    }

    // Chamado a função sem static
    // Ele sempre reinicia o valor de $a
    teste(); // a = 1
    teste(); // a = 1
    teste(); // a = 1
    
    echo "<br>";

    # Criando uma Função com static
    function testeStatic(){

        // Variável estática
        static $a = 0;
        $a++;// Incrementa +1

        echo "$a <br>";

    }

    // Chamado a função com static
    // Ele mantém o valor de $a entre as chamadas
    testeStatic(); // a = 1
    testeStatic(); // a = 2
    testeStatic(); // a = 3

?>