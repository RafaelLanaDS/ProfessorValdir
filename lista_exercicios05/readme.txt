ADS Turma:C 2025_P1_POO
NOME: Rafael Lana de Sousa RA:2040106


Pular para o conteúdo
Você disse:
pratica_p1.pdf
PDF
<?php 
    class estoque_produto{
        public $nome;
        public $preco_unitario;
        public $quantidade;

        public function __construct($nome, $preco_unitario, $quantidade){
            $this->nome = $nome;
            $this->preco_unitario = (float) $preco_unitario;
            $this->quantidade = (int) $quantidade;
        }

        //repor($qtd) → aumenta o estoque apenas se $qtd > 0
         public function repor($qtd){
            $qtd = (int)$qtd;
            if($this->$qtd > 0){
                $this->quantidade += $qtd;
                return true;
            }
            return false;
         }

        //retirar($qtd) → reduz o estoque apenas se $qtd > 0 e $qtd <= quantidade
        //(não permitir ficar negativo).
         public function retirar($qtd){
            $qtd = (int) $qtd;
            if($this->$qtd > 0 && $this->$qtd <= $this->quantidade){
                return "Erro saldo nao pode ficar negativo";
            }
         }
         // aplicarDesconto($percentual) → reduz o precoUnitario em % (ex.: 10 →
         // 10%); aceitar 0 < percentual < 100; não permitir preço negativo.
         public function aplicar_desconto($percentual){
            $percentual = $percentual;
            
         }
    }

?>
O ChatGPT disse:
Rafa, dei uma olhada no enunciado do PDF
pratica_p1

e no seu código, e tem alguns ajustes que precisam ser feitos para seguir as regras direitinho:

Problemas no seu código
Você usou $this->$qtd, mas o correto é só $qtd.

O método retirar() não está decrementando a quantidade, só retorna erro.

O aplicar_desconto() não tem a lógica implementada.

Falta o método valorEmEstoque().

O enunciado pede também os testes dos 4 cenários no final do arquivo.

Código corrigido (completo conforme enunciado)
<?php
// Nome: Rafael Lana
// RA: 123456

class EstoqueProduto {
    public $nome;
    public $precoUnitario;
    public $quantidade;

    public function __construct($nome, $precoUnitario) {
        $this->nome = $nome;
        $this->precoUnitario = (float) $precoUnitario;
        $this->quantidade = 0; // começa em 0 conforme o enunciado
    }

    // repor($qtd) → aumenta o estoque apenas se $qtd > 0
    public function repor($qtd) {
        $qtd = (int) $qtd;
        if ($qtd > 0) {
            $this->quantidade += $qtd;
            return true;
        }
        return false;
    }

    // retirar($qtd) → reduz o estoque apenas se $qtd > 0 e $qtd <= quantidade
    public function retirar($qtd) {
        $qtd = (int) $qtd;
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }

    // aplicarDesconto($percentual)
    public function aplicarDesconto($percentual) {
        if ($percentual > 0 && $percentual < 100) {
            $this->precoUnitario -= $this->precoUnitario * ($percentual / 100);
            return true;
        }
        return false;
    }

    // valorEmEstoque()
    public function valorEmEstoque() {
        return $this->precoUnitario * $this->quantidade;
    }
}

// =================== TESTES ===================

// 1. Reposição válida
$produto = new EstoqueProduto("Café 500g", 18.50);
$produto->repor(20);
echo "1) Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valorEmEstoque(), 2, ',', '.') . "\n";

// 2. Retirada dentro do estoque
$produto->retirar(5);
echo "2) Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valorEmEstoque(), 2, ',', '.') . "\n";

// 3. Retirada excedente (inválida)
$produto->retirar(30);
echo "3) Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valorEmEstoque(), 2, ',', '.') . "\n";

// 4. Desconto no preço
$produto->aplicarDesconto(10);
echo "4) Preço unitário: " . number_format($produto->precoUnitario, 2, ',', '.') . ", Valor em estoque: " . number_format($produto->valorEmEstoque(), 2, ',', '.') . "\n";
?>
👉 Esse código já cobre todos os cenários de teste pedidos no PDF.

Quer que eu rode esse código aqui e te mostre a saída final (os valores que vão aparecer no console), pra confirmar se bate com o esperado?


Fontes

termina esse codigo


Nenhum arquivo escolhidoNenhum arquivo escolhido
O ChatGPT pode cometer erros. Considere verificar informações importantes.
