<?php
require_once "corrente.php";
require_once "poupanca.php";

// Conta Corrente 
echo "Conta Corrente " . "\n";

$contaCorrente = new ContaCorrente("Rafa", 1000);
$contaCorrente->setLimite(500);

echo "Saldo inicial: R$ " . $contaCorrente->getSaldo() . "\n";
echo "Limite: R$" . $contaCorrente->getLimite() . "\n";

$contaCorrente->depositar(300);
echo "Saldo após depósito de R$300: R$" . $contaCorrente->getSaldo() . "\n";

if ($contaCorrente->sacar(200)) {
    echo "Saque de R$200 realizado com sucesso." . "\n";
} else {
    echo "Saque de R$200 não permitido." . "\n";
}

if ($contaCorrente->sacar(1500)) {
    echo "Saque de R$1500 realizado usando o limite." . "\n";
} else {
    echo "Saque de R$1500 não permitido (ultrapassa o limite).";
}
echo "Saldo final: R$ " . $contaCorrente->getSaldo() . "\n";

// Conta Poupança
echo "Conta Poupança" . "\n";

$contaPoupanca = new ContaPoupanca("Maria", 500);
$contaPoupanca->depositar(200);
echo "Saldo após depósito: R$ " . $contaPoupanca->getSaldo() . "\n";

$contaPoupanca->renderJuros(5);
echo "Saldo após render juros de 5%: R$ " . $contaPoupanca->getSaldo() . "\n";
?>