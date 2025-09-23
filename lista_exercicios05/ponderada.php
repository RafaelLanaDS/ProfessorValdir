<?php
// Disciplina.php
class Disciplina {
    public $nome;
    public $notaTrabalho;
    public $notaProva;

    // Construtor: recebe nome, notaTrabalho e notaProva
    public function __construct($nome, $notaTrabalho, $notaProva) {
        $this->nome = $nome;
        $this->notaTrabalho = (float)$notaTrabalho;
        $this->notaProva = (float)$notaProva;
    }

    // calcularMediaPonderada(): 40% trabalho + 60% prova
    public function calcularMediaPonderada() {
        return ($this->notaTrabalho * 0.4) + ($this->notaProva * 0.6);
    }

    // situacao(): mesma regra de notas (>=7 Aprovado, >=5 Exame, <5 Reprovado)
    public function situacao() {
        $media = $this->calcularMediaPonderada();
        if ($media >= 7) return "Aprovado";
        if ($media >= 5) return "Exame";
        return "Reprovado";
    }
}

// Teste
$d1 = new Disciplina("Cálculo", 6.0, 8.0);
$d2 = new Disciplina("Estruturas", 3.0, 4.0);

echo $d1->nome . " - Média: " . $d1->calcularMediaPonderada() . " - Situação: " . $d1->situacao() . "\n";
echo $d2->nome . " - Média: " . $d2->calcularMediaPonderada() . " - Situação: " . $d2->situacao() . "\n";
?>