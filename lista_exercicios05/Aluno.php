<?php 
    class aluno{
        public $nome;
        public $ra;
        public $curso;
        public $diciplina;
        public $p1 = 0.0;
        public $p2 = 0.0;

        // __construct recebera apenas nome , ram disciplina
        public function __construct($nome, $ra, $diciplina){
            $this->nome = $nome;
            $this->ra = $ra;
            $this->diciplina = $diciplina;
        }


        //calcula a media entre as variaveis p1 e p2
        public function calcular_media() {
            return ($this->p1 + $this->p2) / 2;
        }


        //condiçoes 
        public function situcao(){
            $media = $this->calcular_media();
            if($media >= 7){
                return "APROVADO";
            } elseif($media >= 5){
                return "EXAME";
            } else{
                return "REPROVADOo";
            }
        }
    }

$a1 = new aluno("Rafael", 2040106, "POO");
$a1->p1 = 8;
$a1->p2 = 7;

echo "Aluno: $a1->nome " . " RA: $a1->ra" . " Disciplina: $a1->diciplina" . "\n" ; 
echo "Media: " . $a1->calcular_media() . " Situação: " . $a1->situcao();
    
?>
<!--
Classe que armazena nome, RA, disciplina e notas. Tem métodos para calcular média e retornar a situação do aluno (Aprovado, Exame ou Reprovado).
-->