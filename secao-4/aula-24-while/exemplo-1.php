<?php

$condicao = true;

//Enquanto o valor for verdadeiro faça ou exiba
while ($condicao) {

    $numero = rand(1, 10); //Cria numeros aleatórios, ou randomicos

    if ($numero === 3) { // Se o valor for exatamente igual a 3 faça

        echo "TRÊS!!!!";
        $condicao = false;

    }

    echo $numero . " "; // Concatena o valor da variavel com uma string

}

?>