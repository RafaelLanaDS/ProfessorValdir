<!--5. Estrutura Condicional com Operadores Lógicos-->

<?php
    $nota = readline(prompt: "Digite sua nota: ");
    if ($nota >= 7) {
        echo "Aprovado";
    }elseif($nota >= 5 && $nota < 7){
        echo "Recuperação";
    }else{
        echo "Reprovado";
    }
?>