<!--Funçoes simples-->

<?php 
    // funcion palavra chave pra criar uma função
    // calcularnota Nome dado a função
    // ($n1, $n2, $n3) parametros (valores que a função vai receber)
    function calcularnota($n1, $n2, $n3) {
        $media = ($n1 + $n2 + $n3) / 3 ;
        return $media; // Devolve o Resultado para quem chamou a função
    }

    // testes com numeros diferentes.
    echo "Média de (7, 3, 8): " . calcularnota(7, 3, 8) . PHP_EOL;
    echo "Média de (6, 4, 9): " . calcularnota(6, 4, 9) . PHP_EOL;
    echo "Média de (10, 2, 1): " . calcularnota(10, 2, 1) . PHP_EOL;
?>