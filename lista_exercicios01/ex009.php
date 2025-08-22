<!--Arrays Simples-->

<?php 
    // Criando um array com 5 frutas 
    $frutas = ["Maça", "Banana", "Laranja", "Melão", "Tomate"];
    
    //Percorrendo o array e exibindo cada fruta
    foreach ($frutas as $fruta){
        echo $fruta . PHP_EOL;
    }

    // $frutas é uma (ARRAY) com 5 elementos 
    // FOREACH serve para percorrer cada elemento do array automaticamente
    // as $fruta significa que a cada volta a variavel $fruta vai receber um valor do array
    // PHP.EQL quebra de linha no terminal
?>