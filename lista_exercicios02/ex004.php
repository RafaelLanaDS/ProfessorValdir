<?php 
//Função com parametro Padrão

function mensagem($texto = "Sem mensagem"){ //aqui o texto ja tem o valor padrão
    echo $texto;
}

mensagem("Rafael Dev"); //Chamando a função passando uma mensagem, subistituindo o valor padrao 

echo PHP_EOL; // quera linha

mensagem(); // chama a função sem passar nada
?>