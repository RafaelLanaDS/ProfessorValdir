<?php 
    class conta_bancaria {
        private string $titular;
        private float $saldo = 0.0;

        public function __construct(string $titular, float $saldo, float $saldoInicial){
        if ($saldoInicial < 0) {
            throw new Exception("O saldo inicial não pode ser negativo!");
        }
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function depositar($valor){
            $valor = (float)$valor;
            if ($valor > 0){
                $this->saldo += $valor;
                return true;
            }else{
                return false;
            }
        }

        public function sacar($valor){
            $valor = (float)$valor;
            if ($valor > 0 && $valor <= $this->saldo){
                $this->saldo -= $valor;
                return true;
            }else{
                return false;
            }

        }

        // Metodo para obter o saldo
        public function getSaldo(): float{
            return $this->saldo;
        }

    }
?>