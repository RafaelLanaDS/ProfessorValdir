<?php

class Pessoa 
{
    public string $nome;
    public string $cpf;
    public ContaBancaria $conta;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function adicionarConta(ContaBancaria $conta): bool 
    {
        if (empty($conta->getNumeroConta())) {
            return false;
        }

        $this->conta = $conta;
        return true;
    }

    public function hello(): string
    {
        return "Olá, {$this->nome}! Você é um cliente no AgiotaBank";
    }
}

$usuario1 = new Pessoa("João", "268.702.558-57");
echo $usuario1->hello();