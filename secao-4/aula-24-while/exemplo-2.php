<?php

$total =150;
$desconto = 0.9;

do { // faça 

    $total *= $desconto;

} while ($total > 100); // enquanto o total for maior que 100

echo $total;

?>