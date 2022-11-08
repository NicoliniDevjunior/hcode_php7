<?php
// conta de 0 a 1000 incrementando de 5 em 5
for ($i = 0; $i < 1000; $i += 5) {

    // Para de Exibi valores entre 200 a 800 após esses valores continue a exibir 
    if ($i >= 200 && $i <= 800) continue;

    // para de exibir quando o valor for igual a 900
    if ($i === 900) break;

    echo $i . "<br>";

}

?>