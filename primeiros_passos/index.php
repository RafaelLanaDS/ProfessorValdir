<?php

class Pessoa {
    private string $nome; // Propriedade privada

    // Método SET para definir o nome
    public function setNome(string $novoNome): void {
        if (strlen($novoNome) > 0) { // Exemplo de validação
            $this->nome = $novoNome;
        }
    }

    // Método GET para obter o nome
    public function getNome(): string {
        return $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->setNome("Maria"); // Usa o setter para definir o nome
echo $pessoa->getNome();    // Usa o getter para obter o nome
// Saída: Maria

?>
