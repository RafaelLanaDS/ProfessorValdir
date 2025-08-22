<!--12 Busca em array-->
<?php 
    // cada cidade é um elemento array começando com o indice 0
    $cidades = ["São Paulo", "Londrina", "Parana", "Rio de Janeiro", "Bahia"];
    
    // readline() abre o terminal e espera o usuario digitar algo e armazena o valor na variavel
    $busca = readline("Digite o nome de uma cidade: ");

    //normalizando para ignoras letras maiusculas e minusculas FORMATAÇÃO
    $buscaMinuscula = mb_strtolower($busca); // converte oque o usuaria digitar em minuscula incluindo caracteres acentuados 
    $cidadasminuscula = array_map('mb_strtolower', $cidades); // mb_strtolower converte todas as cidades em array em minusculas 

    // verifican se a cidade digitada esta em array utilizando o comando in_array
    if (in_array($buscaMinuscula, $cidadasminuscula)) {
        //usando array_search para descobrir a posição util para informar posiçoes 
        $indici = array_search($buscaMinuscula, $cidadasminuscula);
        echo "$busca esta na lista na possição: $indici" . PHP_EOL;
    } else {
        echo "$busca não esta na lista." . PHP_EOL;
    }
?>