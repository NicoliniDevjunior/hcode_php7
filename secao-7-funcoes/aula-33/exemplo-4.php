<?php

    function ola(){

        $argumentos = func_get_args(); //  Retorna um array que inclui a lista de argumentos da função

        return $argumentos;
        
    }

    var_dump(ola("Bom dia!"));

?>