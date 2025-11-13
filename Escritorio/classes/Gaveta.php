<?php
require_once "Documento.php";
require_once "Objeto.php";
require_once "Pasta.php";

class Gaveta {
    private $itens = [];

    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
    }

    public function listarItens() {
        foreach ($this->itens as $item) {
            echo "    - {$item}\n";
        }
    }
}
