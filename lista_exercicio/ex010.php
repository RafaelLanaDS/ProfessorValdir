<!--Arrays Associativos-->

<?php 
    //array associativo
    $carro = [
        "Marca" => "Honda",
        "Modelo" => "Titan 160",
        "Ano" => 2018
    ];
    // => operador de associação ele liga uma chave a um valor de uma array associativo
    // "marca" é a chave
    // "Honda" é o valor
    // "marca" => "valor" significa "a chave 'marca' tem o valor 'Honda'"

    //Exibindo cada informação formatada
    foreach($carro as $chave => $valor) {
        echo $chave . ": " . $valor . PHP_EOL;
    }
?>
<!--
array sociativo -> cada elemento tem uma chave ex: marca é um valor ex:Honda
FOREACH ($carro as $chaves => $valor)
    $chave pega o nome das chaves "marca" "modelo" "ano"
    $valor pega o valor correnpondente "honda" "titan 160" "2018"
Concatenação (.) -> junta a chave e valor no formato "Marca: Honda"
PHP_EOL -> quebra linha no final

-->