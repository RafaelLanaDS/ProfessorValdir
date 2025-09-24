<?php
// Nome: Rafael Lana
// RA: 2040106

class Estoque_Produto {
    public $nome;
    public $preco_Unitario;
    public $quantidade;

    public function __construct($nome, $preco_Unitario) {
        $this->nome = $nome;
        $this->preco_Unitario = (float) $preco_Unitario;
        $this->quantidade = 0; // começa em 0 
    }


    //repor($qtd) → aumenta o estoque apenas se $qtd > 0 .
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
    //(não permitir ficar negativo).
    // retirar($qtd) → reduz o estoque apenas se $qtd > 0 e $qtd <= quantidade
    public function retirar($qtd) {
        $qtd = (int) $qtd;
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }

    // aplicarDesconto($percentual) → reduz o precoUnitario em % (ex.: 10 →
    //10%); aceitar 0 < percentual < 100; não permitir preço negativo.
    // aplicarDesconto
    public function aplicar_Desconto($percentual) {
        if ($percentual > 0 && $percentual < 100) {
            $this->preco_Unitario -= $this->preco_Unitario * ($percentual / 100);
            return true;
        }
        return false;
    }

    //valorEmEstoque() → retorna precoUnitario * quantidade
    public function valor_EmEstoque() {
        return $this->preco_Unitario * $this->quantidade;
    }
}


// 1. Reposição 
$produto = new Estoque_Produto("Café", 18.50);
$produto->repor(20);
echo " Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valor_EmEstoque(), 2, ',', '.') . "\n";

// 2. Retirada dentro do estoque
$produto->retirar(5);
echo "Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valor_EmEstoque(), 2, ',', '.') . "\n";

// 3. Retirada inválida exede o valor total do estoque, volta o valor que realmente possui
$produto->retirar(30);
echo " Quantidade: {$produto->quantidade}, Valor em estoque: " . number_format($produto->valor_EmEstoque(), 2, ',', '.') . "\n";

// 4. Desconto no preço
$produto->aplicar_Desconto(10);
echo " Preço unitário: " . number_format($produto->preco_Unitario, 2, ',', '.') . ", Valor em estoque: " . number_format($produto->valor_EmEstoque(), 2, ',', '.') . "\n";
?>