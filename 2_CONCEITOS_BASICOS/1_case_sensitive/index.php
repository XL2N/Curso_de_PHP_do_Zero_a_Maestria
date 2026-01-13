<?php
    // EXEMPLOS DE CASE SENSITIVITY EM PHP 

    // Não é case sensitive
    echo "Teste <br>";
    eChO "Testando 2 <br>";
    ECHO "Testando 3 <br>";

    // É case sensitive
    $nome = "Giselle";
    $NOME = "Maria";

    echo $nome;
    echo "<br>";
    echo $NOME; // Vai gerar um erro
?>