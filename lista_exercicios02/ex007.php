<?php 
// Função com logica de negocio

    function vereficadoraprovação($nota){
        if ($nota >= 7 ){
            return "Aprovado";
        }elseif ($nota >= 5){
            return "Recuperação";
        }else{
            return "Reprovado";
        }
    }

    $nota = 8;
    echo "Sua nota doi $nota: " . vereficadoraprovação($nota);

?>