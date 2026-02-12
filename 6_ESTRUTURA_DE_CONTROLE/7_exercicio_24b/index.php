<?php

    // EXERCÍCIO 24-B
    // Crie uma variável que recebe um peso;
    // Caso seja maior que 80, imprima a mensagem que está pesado demais;
    // Se não, imprima "Peso dentro do limite";

    # Variáveis
    $peso = 70;
    $peso2 = 82; 
    $limite = 80;

    # Estrutura condicional
    if($peso > $limite){
        echo "Está pesado demais. <br>";
    } else {
        echo "Peso dentro do limite. <br>";
    }

    if($peso2 > $limite){
        echo "Está pesado demais. <br>";
    } else {
        echo "Peso dentro do limite. <br>";
    }    