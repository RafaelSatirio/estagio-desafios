<?php

    $frase = $_GET['frase'];

    $a = "a";

    $quantidade = substr_count(strtolower($frase), $a);
    if($quantidade == 1){
        echo "A letra 'a' existe na sua frase e aparece $quantidade vez";
    } 
    if($quantidade > 1){
        echo "A letra 'a' existe na sua frase e aparece $quantidade de vezes";
    }

?>

