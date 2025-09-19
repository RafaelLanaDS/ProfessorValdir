<?php 
    class produto{
        public $nome;
        public $preco;
        
        //aplicando desconto no preço
        public function aplicar_desconto($porcentual){
            $this->preco -= $this->preco * ($porcentual/100); //tira o desconto do valor e ja guarda o novo valor no atributo
        }

        //retornar preço atual
        public function exibir_preco(){
            return "Preço: R$" . number_format($this->preco, 2, ',', '.');
        }
    }

//resultado

$p1 = new produto();
$p1->nome = "camisa";
$p1->preco = 100;

$p1->aplicar_desconto(10); // aplica 10% de desconto
echo $p1->exibir_preco();

//$nome $preco = atributos do produto
//aplicar_desconto($porcentual) = diminui o valor comforme o desconto
//exibir_preco() =  mostra o preço formatado em reais
?>