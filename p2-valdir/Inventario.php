<?php
class Inventario {
    protected $capacidadeMaxima = 20; //capacidade inicial
    protected $itens=[]; //itens guardados no inventario

    public function getcapacidadeMaxima(){
        return $this->capacidadeMaxima;
    }
    public function getitens(){
        return $this->itens;
    }

    public function setcapacidadeMaxima($valor){
        $this->capacidadeMaxima = $valor;
    }
    public function setitens($lista){
        $this->itens  = $lista;
    }

    //metodos principais

    public function aumentarCapacidade($nivel){
        $this->capacidadeMaxima += ($nivel * 3);
    }

    public function getEspacoUsado(){
        $tot = 0;
        foreach ($this->itens as item){
            $tot += $item->tamanho(); //gettamanho pertecen class item
        }
        return $tot;
    }
    public function getEspacoLivre() {
        return $this->capacidadeMaxima - $this->getEspacoUsado();
    }

    public function adicionarItem($item) {
        if ($item->getTamanho() <= $this->getEspacoLivre()) {
            $this->itens[] = $item;
            return true;
        }
        return false;
    }

    //  MÉTODO DE REMOVER (
    public function removerPorIndice($indice) {
        if (isset($this->itens[$indice])) {
            unset($this->itens[$indice]);
            $this->itens = array_values($this->itens); // reorganiza os índices
            return true;
        }
        return false;
    }
}

?>