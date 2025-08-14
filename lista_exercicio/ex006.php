<!--6. Estrutura de Repetição While-->

<?php 
    $numero = (int) readline("Digite um numero: ");
    $i = 1;
    while ($i <= 10){
        echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
        $i++;
    }
?>