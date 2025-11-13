<?php 
    class Item{
        protected string $nome;
        protected string $descricao;

        public function __construct(string $nome, string $descricao){
            $this->nome = $nome;
            $this->descricao = $descricao;
        }

        public function getName(){
            return $this-> nome;
        }
        public function __toString() {
        return "{$this->nome} - {$this->descricao}";
        }
    }
?>