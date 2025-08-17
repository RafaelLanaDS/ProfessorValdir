<!--funçoes com condicionais-->

<?php 
    function verificarIdade($i){
        if ($i < 18){
            return "Menor idade";
        } else {
            return "Maior idade";
        }
    }

    // Pede a idade do usuário
    $definir = readline("Digite sua idade: ");

    // Converte para número
    $idade = (int)$definir;

    // Chama a função
    $resultado = verificarIdade($idade);

    echo "Você tem $idade anos e é $resultado.";
?>