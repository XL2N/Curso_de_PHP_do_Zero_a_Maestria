<?php

    // CONHECENDO OPERADOR DE CAST (TYPE JUGGLING)
    // Converter um tipo de dado em outro tipo

    # Exemplo com numero inteiro
    $a = (int) "12";

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if ($a === 12){
        echo "A é identico a 12 <br>";
    }

    // Verificando o tipo de dado
    echo gettype($a);
    echo "<br>";

    # Exemplo com numero float
    $b = (float) "3.14";

    if ($b === 3.14){
        echo "B é identico a 3.14 <br>";
    }

    // Verificando o tipo de dado
    echo gettype($b);
    echo "<br>";
    
    # Exemplo com string
    $c = (string) 100;

    echo $c;
    echo "<br>";

    if ($c === "100"){
        echo "C é identico a '100' <br>";
    }

    // Verificando o tipo de dado
    echo gettype($c);
    echo "<br>";

?>