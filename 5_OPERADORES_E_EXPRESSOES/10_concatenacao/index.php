<?php

    // CONHECENDO OPERADOR DE CONCATENAÇÃO (.)

    # Testando a concatenação
    // não concatenado 
    echo "Testando a concatenação ";
    echo "<br>";

    // concatenado
    echo "Testando" . " a " . "concatenação ";
    echo "<br>";

    # Concatenando variáveis
    $t = "Testando";
    $c = "concatenação";

    echo $t . " a " . $c;
    echo "<br>";

    # Exemplo prático
    $marca = "Fiat";
    $modelo = "Uno";
    $motor = 1.0;
    $velocidade_maxima = 180;

    echo "O carro " . $marca . 
        ", modelo " . $modelo . 
        " com motor " . $motor . 
        " tem velocidade máxima de "
        . $velocidade_maxima . 
        " km/h.";

?>