<?php 
//Funçoes para processar Arrays

function contraelementos($lista){
    return count($lista);

}

$frutas = ["Maça", "Banana", "Laranja", "Melão", "Tomate"];

$quantidade = contraelementos($frutas);

echo "A quantidade de elementos na sua lista foi de $quantidade ";
?>