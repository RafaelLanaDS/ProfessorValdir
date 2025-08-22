<!--4. Estrutura Condicional Simples-->

<?php
    $idade = readline(prompt: "informe sua idade: ");
    if ($idade < 18) {
        echo "menor de idade";
    }else{
        echo "Maior de idade";
    }
?>