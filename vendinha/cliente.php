<?php
class Cliente {
    private $nome;
    private $CPF;
    private $telefone;
    private $endereco;
    private $data_cadastro;
    private $limite_credito;

    public function __construct($nome, $CPF, $telefone, $endereco, $data_cadastro, $limite_credito) {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->data_cadastro = $data_cadastro;
        $this->limite_credito = $limite_credito;
    }

    public function exibirInfo() {
        echo "Nome: {$this->nome}<br>";
        echo "CPF: {$this->CPF}<br>";
        echo "Telefone: {$this->telefone}<br>";
        echo "Endereço: {$this->endereco}<br>";
        echo "Data de Cadastro: {$this->data_cadastro}<br>";
        echo "Limite de Crédito: R$ " . number_format($this->limite_credito, 2, ',', '.') . "<br>";
    }
}

// Criando um objeto (instância da classe Cliente)
$cliente1 = new Cliente(
    "Rafael Lana \n",
    "123.456.789-00 \n",
    "(31) 99999-9999 \n",
    "Rua das Flores, 123 - Belo Horizonte \n",
    "27/10/2025 \n",
    2500.00
);

// Exibindo as informações
$cliente1->exibirInfo();
?>