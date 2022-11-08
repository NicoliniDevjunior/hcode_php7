<?php

$nome = "Eduardo Nicolini";

$nome = strtoupper($nome); // Deixa todos os caracteres em maisculo

echo $nome;

$nome = strtolower($nome); // Deixa todos os caracteres em minusculo

echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome); // Deixa somente a primeira letra  da primeira palavra em maisculo o restante em minusculo

echo "<br>";

echo ucwords($nome); // Deixa somente as primeiras letras de cada palavra em maisculo

?>