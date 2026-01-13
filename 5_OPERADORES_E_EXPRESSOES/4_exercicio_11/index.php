<?php

    // EXERCÍCIO 11
    // Teste a expressão "5" * 12
    // Utilize a função gettype() com o resultado como
    // parâmetro para chegar o tipo resultante da operação

    # Declarando as variáveis
    $a = "5";
    $b = 12;

    # Variavel que calcula o reultado da expressão
    $result = $a * $b;
    
    # Exibindo o resultado e o tipo da variável
    echo $result;
    echo "<br>";
    echo gettype($result);
    echo "<br>";
    
    # Outros exemplos de uso do gettype() 
    
    // Exemplo com array 
    echo gettype([]);
    echo "<br>";

    // Exemplo com float
    echo gettype(3.14);
    echo "<br>";

    // Exemplo com boolean
    echo gettype(true);
    echo "<br>";

    // Exemplo com string
    echo gettype("teste");
    echo "<br>";

?>