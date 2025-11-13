<?php
require_once "Gaveta.php";

class Armario {
    private $gavetas = [];

    public function adicionarGaveta(Gaveta $gaveta) {
        $this->gavetas[] = $gaveta;
    }

    public function listarGavetas() {
        foreach ($this->gavetas as $i => $gaveta) {
            echo "  Gaveta {$i}:\n";
            $gaveta->listarItens();
        }
    }
}
