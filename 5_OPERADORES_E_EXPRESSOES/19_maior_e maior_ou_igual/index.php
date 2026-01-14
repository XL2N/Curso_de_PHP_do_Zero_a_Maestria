<?php

    // CONHECENDO OPERADORES DE MAIOR E MAIOR OU IGUAL

    # Definindo variáveis
    $a = 3;
    $b = 4;
    $c = 5;
    $d = 5;
    $e = 6;

    # Verificando maior que (>)
    
    if($a > $b){// False
        echo " A é maior que B <br>";
    }
    
    if($b > $a){// True
        echo " B é maior que A <br>";
    }

    # Verificando maior ou igual (>=)
    
    if($d >= $c){// True
        echo " D é maior ou igual a C <br>";
    }
    
    if($d >= $a){// True
        echo " D é maior ou igual a A <br>";
    }
    
    if($d >= $e){// False
        echo " D é maior ou igual a E <br>";
    }