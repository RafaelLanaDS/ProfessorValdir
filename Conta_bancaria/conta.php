<?php
class ContaBancaria {
    protected string $titular;
    protected float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0) {
        if ($saldoInicial < 0) {
            throw new Exception("O saldo inicial não pode ser negativo!");
        }
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): bool {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    public function sacar(float $valor): bool {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}
?>