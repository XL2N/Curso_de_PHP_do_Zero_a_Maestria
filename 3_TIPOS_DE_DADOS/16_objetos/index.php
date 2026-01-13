<?php

    // CONHECENDO OBJETOS

    # criando uma classe Pessoa
    class Pessoa{
        
        // método falar
        function falar(){
            echo "Olá, pessoal!";
        }

    }

    # instanciando um objeto da classe Pessoa
    $Giselle = new Pessoa();

    # criando propriedade do objeto
    $Giselle ->nome = "Giselle";

    # Imprimindo a propriedade do objeto
    echo $Giselle ->nome;
    echo "<br>";

    # chamando o método falar do objeto
    $Giselle->falar();


?>