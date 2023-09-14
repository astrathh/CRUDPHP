<?php
class Produto {
    private $codigo;
    private $descricao;
    private $preco;

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }
}