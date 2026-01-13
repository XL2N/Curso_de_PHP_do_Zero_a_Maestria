<?php

    // CONHECENDO VARIÁVEIS POR REFERÊNCIA

    # Criando variaveis numérica x e y  
    $x = 10;
    $y = & $x; 

    // Exibindo os valores de x e y
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    // Atribuindo novo valor a y
    $y = 15;

    // Exibindo os valores após nova atribuição
    echo "Atribuição após referência <br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    // Atribuindo novo valor a x
    $y = 20;

    // Exibindo os valores após nova atribuição
    echo "Atribuição após referência 2<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    # Criando variaveis string meme e meme2
    $meme = "Tabom, senta lá Cláudia!";
    $meme2 = & $meme;

    // Exibindo os valores de meme e meme2
    echo "Atribuição após referência 3<br>";
    echo $meme;
    echo "<br>";
    echo $meme2;
    echo "<br>";

    // Atribuindo novo valor a meme2
    $meme2 = "Oh Denise, sai da live filha!";

    // Exibindo os valores após nova atribuição
    echo "Atribuição após referência 4<br>";
    echo $meme;
    echo "<br>";
    echo $meme2;
    echo "<br>";
?>