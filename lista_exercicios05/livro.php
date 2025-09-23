<?php 
    class livro{
        public $titulo;
        public $paginas;
        public $paginas_lidas;

        public function __construct($titulo, $paginas, $paginas_lidas = 0){
            $this->titulo = $titulo;
            $this->paginas = (int)$paginas;
            $this->paginas_lidas =(int) $paginas_lidas;
        }

        public function verificador_progresso(){
            if($this->paginas == 0)return number_format(0, 2, ',', '.');
            $percent = ($this->paginas_lidas/ $this->paginas) * 100;
            return number_format($percent, 2,',','.');
        }
    }
// Teste
$l1 = new Livro("Aventuras", 200, 50);
$l2 = new Livro("Pequeno Manual", 0, 0); // cuidado com divisão por zero
$l3 = new Livro("Longo", 300, 350); // paginasLidas > paginas -> ajustado

echo $l2->titulo . " - Progresso: " . $l2->verificador_progresso() . "%\n";
echo $l3->titulo . " - Progresso: " . $l3->verificador_progresso() . "%\n";
echo $l1->titulo . " - Progresso: " . $l1->verificador_progresso() . "%\n";
    
?>
<!--
Classe que armazena título e quantidade de páginas. Oferece método para calcular o progresso de leitura em porcentagem.
-->