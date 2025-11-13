<?php
require_once "Armario.php";

class Escritorio {
    private $armarios = [];

    public function adicionarArmario(Armario $armario) {
        $this->armarios[] = $armario;
    }

    public function auditoria() {
        foreach ($this->armarios as $i => $armario) {
            echo "Armário {$i}:\n";
            $armario->listarGavetas();
            echo "\n";
        }
    }
}
