<?php
require_once "Item.php";

class Pasta extends Item {
    private $categoria;

    public function __construct($nome, $descricao, $categoria) {
        parent::__construct($nome, $descricao);
        $this->categoria = $categoria;
    }

    public function __toString() {
        return parent::__toString() . " (Pasta: {$this->categoria})";
    }
}
