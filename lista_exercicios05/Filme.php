<?php 
    class filme{
        public $titulo;
        public $duracao_min;
        public $classificacao;

        public function __construct($titulo, $duracao_min, $classificacao){
            $this->titulo = $titulo;
            $this->duracao_min = (int) $duracao_min;
            $this->classificacao = $classificacao;
        }

        public function descricao_curta(){
            return "{$this->titulo} - {$this->duracao_min} Min - {$this->classificacao} ";
        }

    }

$f1 = new filme("Aventura", 180, "18+");

echo $f1->descricao_curta()
?>