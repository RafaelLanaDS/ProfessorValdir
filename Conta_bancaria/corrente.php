<?php 
require_once "index.php";

class conta_corrente extends conta_bancaria {
    private float $limite;

    public function setLimite(float $limite): void { //setLimite() define o limite.
        $this->limite = $limite;
    }

    public function getLimite(): float { //getLimite() retorna o valor atual.
        return $this->limite;
    }
    
    // sobrescreve o método sacar da classe mãe
    public function sacar($valor){
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= ($this->saldo + $this->limite)){
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }
}
?>