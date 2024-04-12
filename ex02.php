<?php
// Escreva um script em PHP que calcule e exiba a soma dos números pares de 1 a 100.

    $somarPares = 0;
    $par;

    for($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0){
            $somarPares += $i;
            $par++;
        }
    }

    echo "A quantidade de números pares de 0 a 100 é $par e a soma de todos é $somarPares";

?>