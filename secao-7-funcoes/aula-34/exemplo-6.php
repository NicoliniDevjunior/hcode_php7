<?php

    $pessoa = array(

        'nome'=>'Marcus', // string

        'idade'=> 19 //valor integer 
        
    );

    print_r($pessoa); // imprime vores do array antes de ter o valor alterado na memoria pelo & no foreach

    echo "<br>"; 

    // como estou usando o & antes do $value consigo mudar o valor do array 
    foreach ($pessoa as &$value) {

        // gettype retorna o tipo de dados da variavel, se é integer, double, NULL, object, string
        if (gettype($value) === 'integer') $value += 10;
        
        echo gettype($value). " = "; // retorna o valor uma string e um integer
        echo $value.'<br>';

    }

    print_r($pessoa); // imprimie arrey com o valor integer alterado na memoria depois de passar pelo foreach com o parametro &

?>