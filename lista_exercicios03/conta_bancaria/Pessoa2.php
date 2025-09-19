<?php 
require_once "Pessoa.php";
require_once "contaBancaria.php";

$pessoa2 = new Pessoa ('Rafel lana de sousa', '477.027.068-21');

$conta2 = new ContaBancaria('789256-5', 250.00, $pessoa2);

$pessoa2-> adicionarConta($conta2);

$conta2-> depositar(700.50);
$conta2-> sacar(265.78);

echo "Titular: {$pessoa2->nome} <br>";
echo "CPF: {$pessoa2->cpf} <br>";
?>