<?php

class ContaBancaria 
{
    //{tipo de acesso} {tipo de variavel} {nome variavel}
    private string $numero;
    private float $saldo;
    private Pessoa $titular;

    public function __construct(string $numeroConta, float $saldo, Pessoa $titular){
        $this->numero = $numeroConta;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function depositar(float $valor): bool{
        if ($valor <= 0){
             return false;
        } else {
            $novoSaldo = $this -> saldo + $valor;
            $this->saldo = round($novoSaldo, 2);
            return true;
        }
    }
    
    public function sacar(float $valor): bool{
        if ($valor <= 0){
            return false;
        }
        if ($valor > $this->saldo){
            return false;
        }
        $novoSaldo = $this->saldo - $valor;
        $this->saldo = round($novoSaldo, 2);
        return true;
    }
}