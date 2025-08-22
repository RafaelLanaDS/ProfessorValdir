<?php 
// Função que separa números pares e ímpares
function separadoresEimpares($numeros) {
    $pares = [];
    $impares = [];

    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $pares[] = $num;
        } else {
            $impares[] = $num;
        }
    }

    return [
        "pares" => $pares,
        "impares" => $impares
    ];
}

// Exemplo de uso:
$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = separadoresEimpares($lista);

// Exibindo em texto simples
echo "Pares: " . implode(", ", $resultado["pares"]) . "\n";
echo "Ímpares: " . implode(", ", $resultado["impares"]) . "\n";
?>
<!--
🔹 1. function separadoresEimpares($numeros) { ... }

Cria uma função chamada separadoresEimpares.

O parâmetro $numeros é esperado ser um array de números.

Tudo dentro das {} é o que a função faz.

🔹 2. $pares = []; $impares = [];

Cria dois arrays vazios:

$pares → vai guardar todos os números pares.

$impares → vai guardar todos os números ímpares.

🔹 3. foreach ($numeros as $num) { ... }

Percorre o array $numeros.

A cada volta do loop, o valor atual do array é colocado na variável $num.

Exemplo: se $numeros = [1,2,3], o foreach vai rodar 3 vezes → $num = 1, depois 2, depois 3.

🔹 4. if ($num % 2 == 0) { ... } else { ... }

Aqui acontece o teste:

O operador % (módulo) retorna o resto da divisão.

Se $num % 2 == 0, significa que o número é par (divisível por 2).

Senão, ele é ímpar.

🔹 5. $pares[] = $num; e $impares[] = $num;

O [] serve para adicionar um valor no fim do array.

Se $num for par, ele vai para dentro de $pares.

Se $num for ímpar, ele vai para dentro de $impares.

🔹 6. return [ "pares" => $pares, "impares" => $impares ];

O return faz a função devolver um resultado.

Aqui estamos retornando um array associativo, com duas chaves:

"pares" → guarda o array de números pares.

"impares" → guarda o array de números ímpares
-->