<!--
    Tarefa: Implementar Cliente com nome , email , cpf ; validar no construtor; permitir
    alterarEmail com validação; expor métodos de leitura essenciais.
    Dica: normalize email (minúsculas) e armazene CPF apenas com dígitos.
    Entrega: criar 2 instâncias, alterar um email, imprimir resultados.
-->

<?php
class Cliente {
    public $nome;
    public $email;
    public $cpf;

    function __construct($nome, $email, $cpf) {
        // validações simples
        if ($nome == "") {
            echo "Nome inválido<br>";
            return;
        }

        if (strpos($email, "@") === false || strpos($email, ".") === false) {
            echo "Email inválido<br>";
            return;
        }

        // manter só números no CPF
        $cpf = str_replace([".", "-", " "], "", $cpf);
        if (strlen($cpf) != 11) {
            echo "CPF inválido<br>";
            return;
        }

        // normalizações
        $this->nome = $nome;
        $this->email = strtolower($email);
        $this->cpf = $cpf;
    }

    function alterarEmail($novo_email) {
        if (strpos($novo_email, "@") !== false && strpos($novo_email, ".") !== false) {
            $this->email = strtolower($novo_email);
        } else {
            echo "Novo email inválido<br>";
        }
    }

    function exibir() {
        echo "Cliente: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "CPF: " . $this->cpf . "<br><br>";
    }
}

$cliente1 = new Cliente("Rafael Silva", "RAFAEL.SILVA@exemplo.com", "123.456.789-00");
$cliente2 = new Cliente("Maria Souza", "maria.souza@DOMINIO.com", "98765432100");

$cliente1->alterarEmail("novo.email@teste.com");

$cliente1->exibir();
$cliente2->exibir();
?>
