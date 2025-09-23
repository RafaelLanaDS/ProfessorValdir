<?php 
    class terreno{
        public $largura;
        public $comprimento;
        public $preco_metro;

        public function __construct($largura, $comprimento, $preco_metro){
            $this->largura = (float)$largura;
            $this->comprimento = (float)$comprimento;
            $this->preco_metro = (float)$preco_metro;
        }

        public function area(){
           return $this->largura * $this->comprimento;
        }

        public function preco_total(){
            return $this->area() * $this->preco_metro;
        }
    }

$t = new terreno(10, 20, 50);
echo "Area T1: " . $t->area() . "M² - preço: R$ " . number_format($t->preco_total(),2, ',','.');
?>
<!--
Classe que representa largura, comprimento e preço por metro. Calcula a área do terreno e o valor total com base no preço por metro.
-->