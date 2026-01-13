<?php
    // EXERCICIO 6 - CRIE UM ARRAY COM CARACTERISTICAS DE UM CARRO E IMPRIMA DUAS CARACTERISTICAS

    # Criando o array
    $carro = [
        'marca' => 'Volkswagen',
        'modelo' => 'Fusca',
        'ano' => '1970',
        'cor' => 'Amarelo',
    ];

    # Imprimindo o array completo
    print_r($carro);
    echo '<br>';

    # Imprimindo duas características específicas
    echo 'Marca: ';
    echo $carro['marca'];
    echo '<br>';
    echo 'Cor: ';
    echo $carro['cor'];

    # Colocando em outras variaveis
    $modelo = $carro['modelo'];
    $cor = $carro['cor'];
    $ano = $carro['ano'];

    echo '<br>';
    echo " O carro do modelo $modelo, ano $ano, é da cor $cor.";

?>