<?php

    function ola(){

        return "Olá Mundo<br>"; // retorna o valor da string
        
    };

    echo ola(); // chama a função e imprime o valor de retorno da função
    $frase = ola(); // chama a funçãp e armazena o valor retornado da função em uma variavel

    // strlen — Retorna o tamanho de uma string
    echo strlen($frase);

?>