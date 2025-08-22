<!---->

<?php 
    // função para exir a lista formatada 
    function mostrarlista($lista){
        echo PHP_EOL . "Lista de compras " . PHP_EOL;
        foreach ($lista as $indice => $item){
            echo ($indice + 1) . ". " . $item . PHP_EOL;
        }
    }

    // array inicial (ira iniciar vazio)
    $listaCompras = [];

    //loop para adiconar compras 
    while (true) {
        $item = readline("Digite um item para adicionar a lista de compras (ou 'S' terminar de comprar: )");
        // Interronpe o laço
        if (mb_strtolower($item) === "s") {
            break;
        }

        // adicona itens a lista
        $listaCompras[] = $item;
        echo "$item adicionado com sucesso " . PHP_EOL;

        // exindo a lista no final
        if (count($listaCompras) > 0) {
            mostrarlista($listaCompras);
        } else {
            echo "Sua lista de compras esta vazia." . PHP_EOL;
        }

    }


?>

<!--
 
Explicando passo a passo:

1. (Função mostrarLista)
    Recebe o array de compras.

    Usa (foreach) para percorrer e mostrar os itens numerados.

2. Array inicial
    $listaCompras = [];

    Começa vazio.

    Cada vez que o usuário digita algo, é adicionado com $listaCompras[] = $item;.

3. Loop principal (while (true))
    Roda infinitamente até que o usuário digite "sair".

    mb_strtolower($item) converte para minúsculas, então tanto "sair" quanto "SAIR" funcionam.

4. Condição de parada
    Se o usuário digita "sair", o break; interrompe o loop.

5.Exibindo a lista final
    se a lista itens, mostra formatada

    se não mostra que esta vazia 


-->