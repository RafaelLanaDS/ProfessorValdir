<?php 
    class empregado {
        public $nome;
        public $sobrenome;
        public $setor;
        public $salarioMensal;

        // __construct recebe os parametros acima
        public function __construct($nome, $sobrenome, $setor, $salarioMensal){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->setor = $setor;
            $this->salarioMensal = ($salarioMensal > 0) ? (float)$salarioMensal : 0.0; //Se salario <= 0, justa para 0.0           
        }

        // salario_anual retorna salario anuarl * 12
        public function salario_anual(){
            return $this-> salarioMensal * 12;
        }
    }

$empregado1 = new empregado("Rafael", "Lana de Sousa", "Aumoxarife", -2300); //salario invalido 0.0
$empregado2 = new empregado("Valdir", "Pereira", "Professor", 20000);

echo $empregado1->nome . " " . $empregado1->sobrenome . " - " . $empregado1->setor . " Salario Anual: R$ " . number_format($empregado1-> salario_anual(), 2, '.' , ',') . "\n";
echo $empregado2->nome . " " . $empregado2->sobrenome . " - " . $empregado2->setor .  " Salario Anual: R$ " . number_format($empregado2-> salario_anual(), 2, '.' , ',') . "\n";
?>