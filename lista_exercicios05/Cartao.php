<?php 
    class Cartao{
        public $banco;
        public $bandeira;
        public $limite;
        public $fatura;
        

        //inicia fatura em 0.0
        public function __construct($banco, $bandeira, $limite,) {
            $this->banco = $banco;
            $this->bandeira = $bandeira;
            $this->limite = (float) $limite;
            $this->fatura = 0.0;
        }


        //fazer_compra($valor): tenta adicionar valor a fatura se houver limite  disponivel
        // retorna true se compra foi aceita flase caso contrario
        public function fazer_compra($valor){
            $valor = (float)$valor;
            if($valor <= 0){
                return false;
            } elseif($valor <=($this->limite - $this->fatura)){ //
                $this->fatura += $valor;
                return true;
            }
            return false;
        }

        //total_fatura(): retorna o valor atual da fatura
        public function total_fatura(){
            return $this->fatura;
        }
    }

// teste
$c = new Cartao("Itau", "elo", 500.0);
var_dump($c->fazer_compra(200)); // nao ecedeu o limite
var_dump($c->fazer_compra(400)); // ultrapasou o limite 
echo "Fatura: R$" . number_format($c->total_fatura()) . "\n";
?>      
<!--
Classe que representa um cartão de crédito com limite e fatura. Possui método para registrar compras respeitando o limite e consultar o total da fatura.
-->