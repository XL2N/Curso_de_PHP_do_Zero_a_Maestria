<?php

    // CONHECENDO O TIPO NULL

    # Tentativa de imprimir o valor NULL 
    echo NULL;

    # Iniciando uma variável com valor NULL
    $nome = null;

    // Verificando se o valor é NULL
    if(is_null($nome)){
        echo "O valor é nulo!";
    }

    // Atribuindo um valor à variável
    $nome = "Kauê";
    
    // Verificando novamente se o valor é NULL
    if(is_null($nome)){
        echo "O valor é nulo!";
    }

?>