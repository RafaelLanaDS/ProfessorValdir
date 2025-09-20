<?php 
    class aluno{
        public $nome;
        public $matricula;

        //mostra nome e matricula
        public function exibir_dados(){
            return "Nome: $this->nome, Matricula: $this->matricula"; 
        }
    }
$aluno1 = new aluno();
$aluno1-> nome = "Rafael";
$aluno1-> matricula = "2040106";
echo $aluno1->exibir_dados();

?>