<!--7. estrutura de repetição-->
<?php 
    $numero = (int) readline("Digite um numero e veja a sua tabuada: ");
    for ($c = 1; $c <= 10; $c++){
        echo "$numero X $c = " . ($numero * $c) . PHP_EOL;
    }

?>