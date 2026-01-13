<?php

    // CONHECENDO ARRAYS ASSOCIATIVOS EM PHP

    # Criando um array associativo
    $cachorro = [
        'nome' => 'Lion', 
        'patas' => 4, 
        'cor' => 'branca e preto'];

    # Imprimindo o array

    // Completo
    print_r($cachorro);
    echo '<br>';

    // Valor específico
    echo $cachorro['nome'];
    echo '<br>';
    echo $cachorro['patas'];
    echo '<br>';

    # Criando outro array associativo
    $carro = [
        'marca' => 'Fiat',
        'modelo' => 'Uno',
        'ano' => 2010,
        'cor' => 'prata',
        'vendido' => true
    ];

    // Imprimindo o array completo
    print_r($carro);
    
?>