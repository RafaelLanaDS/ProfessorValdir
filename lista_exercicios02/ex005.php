<?php 
//Função chamando outra função
function quadrado($n){
    return $n * $n;
}

function mostrarquadrado($n){
    $resultado = quadrado($n);
    echo "O quadrado de $n é $resultado";
}

mostrarquadrado(5)
?>