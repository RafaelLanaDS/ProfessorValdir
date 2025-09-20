<?php 
class conta_bancaria {
    public $titular;
    public $saldo = 0;

    //depositar valor
    public function depositar($valor){ //depositar metodo que recebe um paremetro ($valor)
        $this->saldo += $valor;
    }


    //sacar um valor (se tiver saldo)
    public function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
        }else{
            echo "[ERRO] Saldo insuficiente";
        }
    }

    //mostrar saldo
    public function exibir_saldo(){
        return "Saldo atual: R$ " . number_format($this-> saldo, 2, ',' , '.');
    }
    
}

$c1 = new conta_bancaria();
$c1-> titular = "Rafael";
$c1->depositar (1000); // 1000 é passado como argumento para $valor 
$c1->sacar (250);

echo $c1->exibir_saldo();
?>