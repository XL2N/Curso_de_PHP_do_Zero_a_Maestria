<?php

    // CONHECENDO OPERADORES DE COMPARAÇÃO

    ## Exemplos Hardcoded

    // Menor que (<)
    if(4 < 12){ # True
        echo "4 é menor que 12 <br>";
    }

    if(24 < 12){ # False
        echo "24 é menor que 12 <br>";
    }

    // Menor ou igual que (<=)
    if(12 <= 12){ # True
        echo "12 é menor ou igual a 12 <br>";
    }

    if(12 <= 11){ # False
        echo "12 é menor ou igual a 11 <br>";
    }

    ## Exemplos com Variáveis

    $a = 5;
    $b = 10;

    // exemplo com variaveis
    if($a <= $b){ # True
        echo "A é menor ou igual a B <br>";
    }

    if($b <= $a){ # False
        echo "B é menor ou igual a A <br>";
    }

    // exemplo com variaveis e valores fixos
    if($b <= 11){ # True
        echo "B é menor ou igual a 11 <br>";
    }
?>
