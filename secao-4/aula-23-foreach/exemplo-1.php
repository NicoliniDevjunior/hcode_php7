<?php

    $meses = array(

        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro",
        "Outubro", "Novembro", "Dezembro"

    );

    /* para trazer somente os meses sem o valor da posição do array faça o seguinte:
        foreach ($meses as $mes)
    */
    foreach ($meses as $index => $mes) {

        echo "Indice: ".$index."<br>";
        echo "O mês é: ".$mes."<br><br>";

    }

?>