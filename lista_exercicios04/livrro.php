<?php 
class livro {
    public $titulo;
    public $autor;
    public $paginas;

    //mostrar titulo e autor
    public function exibir_resumo(){
        return "Livro: $this->titulo Autor:  $this->autor Paginas: $this->paginas";
        
    }

    // retornar numero de paginas
    //public function quantidade_paginas(){
      //  return "Paginas: $this->paginas";
    //}
    
    //exemplo de uso

}
$livro1 = new livro();
$livro1->titulo = "Entendendo Algoritimos";
$livro1->autor = "Aditya Y. Bhargava";
$livro1->paginas = 263;

echo $livro1->exibir_resumo();
//echo $livro1->quantidade_paginas();
?>