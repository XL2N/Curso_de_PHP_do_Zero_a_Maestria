<?php

    // CONHECENDO ESCOPO GLOBAL

    # Criando uma variavel global
    $teste = "abc";

    //Imprimindo variavel global
    echo "$teste GLOBAL <br>";

    # Criando um if que acessa a variavel global
    if (true) {

        // Atualizando variavel global 
        $teste = "cba";

        // Imprimindo variavel global
        echo "$teste  IF <br>";
    }

    // Imprimindo variavel global
    echo "$teste GLOBAL 2 <br>";

    # Criando uma função com variavel local
    function testandolocal(){

        // Criando variavel local
        $teste = "def";

        // Imprimindo variavel local
        echo "$teste LOCAL <br>";
    }

    // Chamando a função
    testandolocal();

    # Criando uma função que acessa a variavel global
    function testandoglobal(){

        // Acessando variavel global
        global $teste;

        // Atualizando variavel global
        $teste = "bac";

        // Imprimindo variavel global
        echo "$teste GLOBAL NA FUNÇÃO <br>";
    }

    // Chamando a função
    testandoglobal();

    // Imprimindo variavel global
    echo "$teste GLOBAL 3 <br>";

?>