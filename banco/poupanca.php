<?php
require_once "conta.php";

class ContaPoupanca extends ContaBancaria {
    public function renderJuros(float $taxa): void {
        if ($taxa > 0) {
            $this->saldo += $this->saldo * ($taxa / 100);
        }
    }
}
?>