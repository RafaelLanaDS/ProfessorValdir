<?php 
require_once "Pessoa.php";
require_once "contaBancaria.php";

$pessoa1 = new Pessoa('João da Silva', '147852369');

$conta1 = new ContaBancaria('000123-4', 100.00, $pessoa1);

$pessoa1->adicionarConta($conta1);

$conta1->depositar(50.00);
$conta1->sacar(20.00);

echo "Titular: {$pessoa1->nome} <br>";
echo "CPF: {$pessoa1->cpf} <br>";
?>