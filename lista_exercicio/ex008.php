<!--Estrutura de repetição com condicional-->
<?php 
    $c = 1;
    while($c < 100){
        //verifica se é par
        if ($c % 2 == 0){
            echo $c . " - par" . PHP_EOL;
        }else {
            echo $c . " - impar" . PHP_EOL;
        }
        $c++;
    }   
?>