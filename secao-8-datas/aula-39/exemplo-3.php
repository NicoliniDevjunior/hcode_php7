<?php
    // https://www.php.net/manual/pt_BR/function.strftime.php

    setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");

    echo ucwords(strftime("%A %B"));

?>