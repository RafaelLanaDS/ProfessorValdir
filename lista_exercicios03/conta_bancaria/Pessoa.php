<?php

class Pessoa
{
    // Atributos da pessoa
    public string $nome;     // Nome da pessoa
    public string $cpf;      // CPF da pessoa
    public array $contas;    // Lista de contas da pessoa

    // Construtor (executa quando criamos o objeto)
    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;     // Define o nome
        $this->cpf = $cpf;       // Define o CPF
        $this->contas = [];      // Começa com lista de contas vazia
    }

    // Função para adicionar uma conta na lista
    public function adicionarConta(ContaBancaria $conta): bool
    {
        // Se o número da conta estiver vazio, retorna falso
        if (empty($conta)) {
            return false;
        } 
        else {
            // Adiciona a conta na lista
            $this->contas[] = $conta;
            return true; // Deu certo
        }
    }

    //ela retorna um array com contotas as contas dessa pessoa
    public function listaConta(): array{
        return $this -> contas;
    }
}


