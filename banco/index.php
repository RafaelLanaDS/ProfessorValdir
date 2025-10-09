<?php

classe ContaBancaria
{
    string privada $titular;
    string privada $cpf;
    string privada $agência;
    string privada $numero;
    privado float $saldo = 0;

    função pública __construct(string $titular, string $cpf, string $agencia, string $numero)
    {
        $this->titular = $titular;
        $this->setCpf($cpf);
        $this->agência = $agência;
        $this->numero = $numero;
    }

    // getters e setters
    // gettters -> get -> saída/retorno das informações
    // setters -> set -> entrada e validação das informações
    // para cada atributo preciso de um get e um set

    // setCpf e getCpf estão encapsulando o comportamento de leitura e modificação
    // do CPF da classe
    // podemos chamar a interface de acesso e validação
    função pública setCpf(string $cpf)
    {
        se (!$this->validaCpf($cpf)) {
            throw new InvalidArgumentException("CPF Inválido", $cpf);
        }

        $this->cpf = $cpf;
    }

    função pública getCpf(): string
    {
        retornar $this->cpf;
    }

    função pública validaCpf($cpf): bool
    {
        // validação com regex - expressão regular
        se (preg_match('/\D/', $cpf)) {
            retornar falso;
        }

        se (strlen($cpf) != 11) {
            retornar falso;
        }

        retornar verdadeiro;
    }

    função pública exibirSaldo()
    {
        echo "O saldo da conta {$this->numero} - {$this->agencia}, {$this->titular} é {$this->saldo}\n";
    }

    função pública saque(float $valor)
    {
        se ($valor <= 0) {
            retornar falso;
        }

        se ($valor > $this->saldo) {
            retornar falso;
        }

        $this->saldo -= $valor;
        retornar verdadeiro;
    }

    função pública deposito(float $valor)
    {
        se ($valor <= 0) {
            retornar falso;
        }

        $this->saldo += $valor;
        retornar verdadeiro;
    }
}

tentar {
    $conta01 = new ContaBancaria("João", "1", "25", "0001");

    $conta01->exibirSaldo();
    $conta01->deposito(10);
    $conta01->exibirSaldo();

    $conta01->deposito(200);
    $conta01->exibirSaldo();

    $conta01->saque(18);
    $conta01->exibirSaldo();
    eco $conta01->getCpf();
} pegar (InvalidArgumentException $e) {
    eco $e->getMessage();
}
?>