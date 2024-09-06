<?php

    $numero = $_GET['num'];

    $a = 0;
    $b = 1;
    $c = 0;
    $mensagem = "";

    echo "<h1>Sequência de Fibonacci:</h1>";

    while ($a <= $numero){
        echo "<strong>$a</strong>, ";
        if($a == $numero){
            $mensagem = "<br><h1>seu número faz parte da sequência de Fibonacci</h1>";
        } else {
            $mensagem = "<br><h1>seu número não faz parte da sequência de Fibonacci</h1>";
        }
        $c = $a + $b;
        $a = $b;
        $b = $c;
        
    }

    echo "$mensagem";


?>

<a href="index.php"><button>Voltar</button></a>