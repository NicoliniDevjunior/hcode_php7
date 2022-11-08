<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

// Procura o valor da 2° variavel dentro da 1° variavel inserida em strpos.
$q = strpos($frase, $palavra); // Retorna a posição em que se encontra o valor da 2° variavel

// procura o texto na variavel $frase, apartir da posição 0 até a posição guardada na variavel $q.
$texto = substr($frase, 0, $q);

var_dump($texto);

/* strlen: conte a string ou as letras dessa string
Procura o valor da variavel $frase apartir da posição $q + "quantidade de letras"strlen($palavra).
E retorna somente o valor posterior.
*/
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2); 

?>