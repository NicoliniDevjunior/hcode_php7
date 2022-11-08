<?php
    /*
        https://www.php.net/manual/pt_BR/function.include.php
        https://www.php.net/manual/pt_BR/function.require-once.php
        A expressão require_once é idêntica a require exceto que o PHP verificará se o arquivo já foi incluído, 
        e em caso afirmativo, não o incluirá (exigirá) novamente.
    */

    //include "inc/exemplo-1.php";
    require_once "inc/exemplo-1.php";

    $resultado = somar(10, 25);

    echo $resultado;

?>