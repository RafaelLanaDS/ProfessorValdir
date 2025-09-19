<?php 
    class carro{
        public $marca;
        public $modelo;
        public $ano;
        
        // metodo para retornar as infomaçoes 
        public function exibir_informaçoes(){
            return "Marca: $this->marca, modelo: $this->modelo, Ano: $this->ano";
        }
    }

//modo de uso
$carro1 = new carro();
$carro1 ->marca = "toyta";
$carro1 ->modelo = "fusca";
$carro1 ->ano = 2020;

echo $carro1->exibir_informaçoes();

//$marca $modelo $ano = atributos que guardam informaçoes do carro 
// exibir_informaçoes() = metodo que monta uma str com os atributos 
// $this ->atributo = pega o valor dentro do objeto atual  
?>