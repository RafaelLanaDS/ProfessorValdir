<?php
require_once "conta.php";

class ContaCorrente extends ContaBancaria {
    private float $limite;

    public function setLimite(float $limite): void {
        $this->limite = $limite;
    }

    public function getLimite(): float {
        return $this->limite;
    }

    // sobrescreve o método sacar da classe base
    public function sacar($valor): bool {
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= ($this->saldo + $this->limite)) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
}
?>