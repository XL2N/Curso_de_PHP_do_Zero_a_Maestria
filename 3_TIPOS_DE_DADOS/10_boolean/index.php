<?php

    // CONHECENDO O TIPO BOOLEAN 

    # Imprimindo valores booleanos
    echo true;
    echo '<br>';
    echo false;
    echo '<br>';

    # Utilizndo expressão boleana 
    if (true) {
        echo '<br>Entrou no if <br>';
    }

    # Ultilizando expressão que se torna boleana
    
    // hardcode
    if (5 > 2){
        echo 'É verdadeiro! 1 <br>';
    }
    // variável
    $podeentrar = true;

    if ($podeentrar){
        echo "É verdadeiro! 2 <br>";
    }

?>