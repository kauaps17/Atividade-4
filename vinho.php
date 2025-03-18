<?php
class Vinho {
   
    private $nome;
    private $tipo;
    private $pais;
    private $preco;

   
    public function __construct($nome, $tipo, $pais, $preco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->pais = $pais;
        $this->preco = $preco;
    }

   
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    
    public function mostrarVinho() {
        return "Nome: {$this->nome} <br>
                Tipo: {$this->tipo} <br>
                País: {$this->pais} <br>
                Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }

    
    public function verificarPreco($preco) {
        return $preco < 25;
    }
}
?>
