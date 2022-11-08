<?php

    $pessoas = array();

    // array_push serve para adicionar itens ao arrey depois que o mesmo foi criado
    array_push($pessoas, array(

        'nome'=>'João',
        'idade'=>20

    ));

    // Adiciona mais estes valores ao array
    array_push($pessoas, array(

        'nome'=>'Glaucio',
        'idade'=>25

    ));

    print_r($pessoas);

    echo "<br>";
    
    // traz o valor da da primeira posição do array none
    print_r($pessoas[0]['nome']);

?>