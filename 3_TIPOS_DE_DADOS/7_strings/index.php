<?php

    // CONHECENDO STRINGS EM PHP

    # Aspas Duplas e Simples
    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';

    # Misturando Aspas
    echo "Ele disse: 'OLÁ' <br>";
    echo 'Ele disse: "OLÁ" <br>';

    # Usando variaveis dentro de strings
    $idade = 15;

    echo "Ele tem $idade anos <br>"; # apenas aspas duplas interpretam variaveis
    echo 'Ele tem $idade anos <br>'; # aspas simples imprimem o texto literalmente

?>