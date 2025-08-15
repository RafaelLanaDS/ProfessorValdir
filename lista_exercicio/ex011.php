<!--Arrays multidimencionais-->

<?php 
  $alunos = [
    "Rafael" => [10, 10, 10],
    "Valdir" => [5, 8, 10],
    "Cleiton" => [9, 3, 9]
  ];
  //percorrendo o array
  foreach($alunos as $nome => $notas) {
    //calcular media 
    $media = array_sum($notas) / count($notas);

    //exibindo nome e media 
    echo "Aluno: $nome - Média: " . number_format($media, 2) . PHP_EOL;
  }
?>
<!--

-> array_sum($notas) = soma todas as notas funciona tanto como numeros int ou float
-> count($notas) = conta quantas notas existem / dividindo os dois e obtendo a media 
-> number_format($media, 2) = formata a media com duas casas decimais 



-->