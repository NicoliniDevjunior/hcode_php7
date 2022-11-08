<?php

    $diaDaSemana = date("w"); // traz o numero do dia da semana

    switch ($diaDaSemana) {

        case 0:
            echo "Domingo";
        break; //Para o codigo aqui, sem o breack ele executa o proximo case

        case 1:
            echo "Segunda";
        break;

        case 2:
            echo "Terça";
        break;

        case 3:
            echo "Quarta";
        break;

        case 4:
            echo "Quinta";
        break;

        case 5:
            echo "Sexta";
        break;

        case 6:
            echo "Sábado";
        break;

        default: // caso o valor não seja igual a nenhum dos cases acima executa o cocigo dentro do default
            echo "Data inválida";
        break;

    }

?>