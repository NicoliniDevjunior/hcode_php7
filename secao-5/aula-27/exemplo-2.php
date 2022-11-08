<?php
    /* 
        1° parametro nome da constante não pode conter espaço 
        Exp: de constante em forma de array
    */
    define("BANCO_DE_DADOS", [

        '127.0.0.1',
        'root',
        'password',
        'test'

    ]);

    print_r(BANCO_DE_DADOS)

?>