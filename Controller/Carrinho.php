<?php
include_once("..\Model\Produto.php");

class Carrinho 
{
    private array $compras;
    private $total;

    public function __construct()
    {
        $this->compras = array();
    }

    public function calcularTotal(){

        if(!empty($compras)){
            $this->total = 0;
            foreach ($compras as $compra) {
                $this->total += $compra['preco'] * $compra['quantidade'];
            }
            return $this->total;
        }
        else
            return "Batata";

    }

    public function adicionar(Produto $produto)
    {
        if(array_key_exists($produto->getCodigo(), $this->compras)){
            $this->compras[$produto->getCodigo()]['quantidade'] += 1;
        }else{
            $this->compras[$produto->getCodigo()] = 1;
            $this->compras[$produto->getCodigo()]['preco'] = $produto->getPreco();
            $this->compras[$produto->getCodigo()]['descricao'] = $produto->getDescricao();
        }
    }
}

?>


