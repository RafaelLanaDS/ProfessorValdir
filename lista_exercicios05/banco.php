<?php
// Conta.php
class Conta {
    public $numero;
    public $titular;
    public $saldo = 0.0;

    // Construtor: recebe numero e titular, saldo inicia em 0.0
    public function __construct($numero, $titular) {
        $this->numero = $numero;
        $this->titular = $titular;
    }

    // depositar($valor): adiciona ao saldo se valor > 0. Retorna true/false.
    public function depositar($valor) {
        $valor = (float)$valor;
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    // sacar($valor): subtrai do saldo se valor > 0 e valor <= saldo. Retorna true/false.
    public function sacar($valor) {
        $valor = (float)$valor;
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    // transferir($valor, $contaDestino): operação atômica básica.
    // Primeiro valida; se ok faz saque e deposita no destino. Retorna true/false.
    public function transferir($valor, Conta $contaDestino) {
        $valor = (float)$valor;
        if ($valor <= 0) return false;
        if ($valor > $this->saldo) return false;

        // faz o saque
        $this->saldo -= $valor;
        // tenta depositar no destino; se falhar, desfaz o saque
        $depo = $contaDestino->depositar($valor);
        if (!$depo) {
            // rollback
            $this->saldo += $valor;
            return false;
        }
        return true;
    }
}

// Teste
$c1 = new Conta("001", "Rafa");
$c2 = new Conta("002", "Paula");

$c1->depositar(1000);
$c1->sacar(200);
echo $c1->titular . " - Saldo: R$ " . number_format($c1->saldo,2,',','.') . "\n";

if ($c1->transferir(300, $c2)) {
    echo "Transferência realizada.\n";
} else {
    echo "Falha na transferência.\n";
}

echo $c1->titular . " - Saldo: R$ " . number_format($c1->saldo,2,',','.') . "\n";
echo $c2->titular . " - Saldo: R$ " . number_format($c2->saldo,2,',','.') . "\n";
?>