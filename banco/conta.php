
<?php
class ContaBancaria {  // classe base

    // atributos, utilizei protected pois ele permite as classes filhas acessar esses atributos ja o private nao permitiria esse acesso as classes
    protected string $titular; //Nome do dono 
    protected float $saldo; // saldo 

    // construtor: executado quando formos fazer um teste de uma nova conta 
    public function __construct(string $titular, float $saldoInicial = 0) {
        if ($saldoInicial < 0) {
            throw new Exception("O saldo inicial não pode ser negativo!"); // esse metodo lança uma exeção, um erro controlado ex:
                                                                            //$conta = new ContaBancaria("Rafa", -100);
                                                                            //Fatal error: Uncaught Exception: O saldo inicial não pode ser negativo!
        }
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    //Metodo para depositar dinheiro
    public function depositar(float $valor): bool {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    //metodo para saque si tives saldo suficiente 
    public function sacar(float $valor): bool {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    // metodo para cultar saldo
    public function getSaldo(): float { // metodo get retorna o valor do atributo que no caso de SALDO
        return $this->saldo;
    }
}
?>
