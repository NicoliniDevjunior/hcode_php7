<?php

    session_id('ofkncku49jq860tn0et5utgnkl');

    require_once("config.php");

    session_regenerate_id(); // regenera a seção

    echo session_id(); 

    var_dump($_SESSION);

?>