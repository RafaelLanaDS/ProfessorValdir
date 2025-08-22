<?php 
// Funçoes dependentes 
function calcularmedia($n1, $n2, $n3){
    $media = $n1 + $n2 + $n3;
    return($media);
}
function resultadoaluno($nome, $n1, $n2, $n3){
    $media = calcularmedia($n1, $n2, $n3);
    echo "O aluno $nome teve média $media ";

    if ($media >= 7) {
        echo "Situação: Aprovado ";
    } else {
        echo "Situação: Reprovado ";
    }
}

// Teste da função
resultadoaluno("Rafa", 8, 7, 6);
?>