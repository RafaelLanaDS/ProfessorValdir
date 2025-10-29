<?php
class animal
{
    private string $nome;

    public function __construct(string $nome)
    {
        return $this->nome = ($nome);
    }
    public function getNaame(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            $this->nome = "Nome Vazio";
        }
    }

    public function FazBarulho(): string
    {
        return "Animal fazendo barulho !";
    }
    public function descrever(): string
    {
        return "Eu me chamo {$this->nome}";
    }
}
