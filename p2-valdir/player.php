<?php
require_once 'Inventario.php';
class Player 
{
    protected $nome;
    protected $inventario;
    protected $nivel = 1;
    
    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->inventario = new Inventario();
        $this->nivel = 1;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function getInventario()
    {
        return $this->inventario;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setInventario($inventario)
    {
        $this->inventario = $inventario;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function coletarItem($item): bool
    {
        if($this->inventario->getcapacidadeMaxima() > $this->capacidadeMaxima){
            return false;
        } 
        $this->inventario->adicionarItem($item);
        return true;
    }

    public function soltarItem($item): bool
    {
        if($this->inventario->getCapacidade() < 0){
            return false;
        }
        $this->inventario->removerItem($item);
        return true;
    }

    public function subirNivel()
    {
        $this->nivel += 1;
    }
}
?>