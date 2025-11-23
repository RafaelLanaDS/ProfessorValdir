<?php 
    $linhhas = 20;
    $colunas = 20;
    $altura = 10;

    //criar matriz
    $matriz = [];
    for($i = 0; $i < $linhas; $i++){
        $linha = [];
        for($j = 0; $j < $colunas; $j++){
            $linha[$j] = '0';
        }
        $matriz[$i] = $linha;
    }

    //imprimir matriz
    for($i = 0; $i < $linhas; $i++)
?>