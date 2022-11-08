<?php
    // https://hcode.com.br/blog/passagem-de-parametros-por-valor-e-referencia-no-php
    $a = 10; // valor informado na variavel e armazenado na memoria

    // Quango usso esse & significa passagem de parametro por referencia.
    function trocaValor(&$b){ 

        $b += 50; // somo o valor passaro na variavel com o valor = 50

        return $b;
        
    };

    echo $a; // pega o valor atual armazenado na memorria da variavel

    echo "<br>";

    echo trocaValor($a); // passa O valor da variavel 10 e retorna o calculo 60 usando o & para referenciar a memoria, armazena na variavel $a

    echo "<br>";

    echo trocaValor($a); // como o valor da memoria foi atualizado para 60, passa novamente para a função, como estou referenciando a memoria com &, atualiza o valor da função atualizando a memoria com o valor do retorno
    echo "<br>";

    echo $a; // imprimo o ultimo valor armazenado na memoria da variavel

?>