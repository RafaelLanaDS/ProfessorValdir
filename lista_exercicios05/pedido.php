<?php 
    class produto_simples{
        public $nome;
        public $preco;

        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = (float) $preco;
            
        }
    }
    class item_pedido{
        public $produto; //instancia de produto_simples
        public $quantidade;

        public function __construct(produto_simples $produto, $quantidade){
            $this->produto = $produto;
            $this->quantidade = (int) $quantidade;
        }

        public function subtotal(){
            return $this->produto->preco * $this->quantidade;
        }
    }

$p1 = new produto_simples("caneta", 30.0);
$i1 = new item_pedido($p1, 2);

echo $p1->nome . " - Subtotal: R$ " . number_format($i1->subtotal(),2,',','.')
?>