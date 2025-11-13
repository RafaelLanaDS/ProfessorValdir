<?php
require_once "Item.php";

class Objeto extends Item {
    private $peso;

    public function __construct($nome, $descricao, $peso) {
        parent::__construct($nome, $descricao);
        $this->peso = $peso;
    }

    public function __toString() {
        return parent::__toString() . " (Objeto: {$this->peso}kg)";
    }
}
