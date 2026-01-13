<?php

    // EXERCÍCIO 7 - CRIE UM ARRAY ASSOCIATIVO
    // + COM CARACTERISTICAS DE UMA PESSOA
    // + DESAFIO: FAÇA UM IF CHECANDO SE ELA 
    // É MAIOR DE IDADE E IMPRIMA SE FOR

    # Criando array associativo
    $pessoa = array(
        "nome" => "Victor",
        "idade" => 21,
        "altura" => 1.65,
        "cidade" => "Itacuruba"
    );

    # Atribuindo valores a variáveis
    $nome = $pessoa["nome"];
    $idade = $pessoa["idade"];

    # Verificando se é maior de idade
    if($idade >= 18){
        echo "$nome é maior de idade.";
    }

?>