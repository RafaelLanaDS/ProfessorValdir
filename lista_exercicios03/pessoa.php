<?php 
class Pessoa {
    public string $nome;
    public string $cpf;
    public array $contas;

    public function __construct(string $nome, string $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function adiconar_conta(conta_bancaria $conta): bool{
        if (empty ($conta->getnumero_conta())){
            return false
        }
        $this->conta=$conta;
        return true;
            
    }
    

    
}
?>
