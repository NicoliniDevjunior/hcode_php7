<?php

$empresa = "Hcode";

//Primeiro parametro dentro de str_replace troca o "o" pelo "0" da variavel  
$empresa = str_replace("o", "0", $empresa);

//Primeiro parametro dentro de str_replace troca o "e" pelo "3" da variavel
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>