<?php 
    class vendedor{
        public $nome;
        public $email;
        public $salario_base;
        public $porcentual_comissao;
        public $toral_vendido = 0.0;

        // recebe nome email salario_base porcentual_comissao
        public function __construct($nome, $email, $salario_base, $porcentual_comissao){
            $this->nome =$nome;
            $this->email = $email;
            $this->salario_base = (float)$salario_base;
            $this->porcentual_comissao =(float)$porcentual_comissao;
        }

        public function fazer_venda($valor){ //adiciona valor ao total_vendido se valor > 0. retorna true/false 
            $valor = (float)$valor; //converte oque foi posto para numero decimal
            if($valor > 0) { // condição: so aceita numeros maios que 0
                $this->toral_vendido += $valor; //soma o valor da venda mais ao total ja vendido
                return true; //indica que a venda foi realizada com sucesso
            }
            return false; //se valor for negativo não registra venda 
        }

        public function salario_total(){
            return $this->salario_base + ($this->toral_vendido * $this->porcentual_comissao);
            
        }

        public function valor_comissao(){
            return $this->salario_total() - $this->salario_base;
        }
    }

// teste
$v = new vendedor("Rafael", "Ratox.rafa@gmail.com", 2500, 0.05);
$v->fazer_venda(10000);
$v->fazer_venda(3000);
echo $v->nome . " - Salario Total: R$" . number_format($v->salario_total(),2,',','.') . "\n";
echo "Valor da comissão: " . number_format($v->valor_comissao())
?>
<!--
Classe que guarda dados de um vendedor, com salário base e comissão. Permite registrar vendas e calcular o salário total com comissão.
-->