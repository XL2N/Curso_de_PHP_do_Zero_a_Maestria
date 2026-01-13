<?php

// VERIFICANDO SE O VALOR É UM INTEIRO

# Exemplo padrão de sucesso
if(is_int(5)){ # True
    echo "É um Inteiro <br>";
}

# Exemplo de erro 
if(is_int("Não é um Inteiro")){ # False
    echo "É um Inteiro 2 <br>";
}


# Exemplo de sucesso com variável

$valor = 10;

if(is_int($valor)){ # True
    echo "É um Inteiro 3 <br>";
}

?>