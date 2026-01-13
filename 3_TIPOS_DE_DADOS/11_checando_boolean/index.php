<?php

    // VERIFICANDO SE O VALOR É UM BOOLEAN

    # Exemplo com variáveis
    $quero = true;
    $posso = 'não';

    // caso True
    if(is_bool($quero)){
        echo 'É boolean! 1 <br>';
    }

    // caso False
    if(is_bool($posso)){
        echo 'É boolean! 2 <br>';
    }

    # Exemplo com hardcode
    if(is_bool(false)){
        echo 'É boolean! 3 <br>';
    }

    # Verificando o numero 0
    if(is_bool(0)){
        echo 'É boolean! 4 <br>';
    }

    if(0 == false){
        echo '0 é considerado falso! <br>';
    }
    
?>