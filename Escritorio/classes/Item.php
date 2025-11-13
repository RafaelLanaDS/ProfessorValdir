<?php
class Item {
    protected $nome;
    protected $descricao;

    public function __construct($nome, $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function __toString() {
        return "{$this->nome} - {$this->descricao}";
    }
}
