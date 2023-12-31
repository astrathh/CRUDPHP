<?php
include_once("../Model/Produto.php");
include_once("../Model/Banco.php");

class ProdutoDAO
{
    public function gravar(Produto $produto)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "INSERT INTO produto (descricao, preco) VALUES ('" . $produto->getDescricao() . "', '" . $produto->getPreco() . "')";

        $resultado = pg_query($conexao, $sql);

        $r = pg_affected_rows($resultado);
        pg_close($conexao);

        if ($resultado) {
            echo "Produto cadastrado com sucesso!";
            return $r;
        } else {
            echo "Erro ao cadastrar produto!";
        }
    }

    public function listar()
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "SELECT * FROM produto ORDER BY 2 DESC";

        $consulta = pg_query($conexao, $sql);

        //$r = pg_affected_rows($resultado);
        pg_close($conexao);
        return $consulta;

    }

    public function remover($produto)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "DELETE FROM produto WHERE codigo = '" . $produto->getCodigo() . "'";

        $resultado = pg_query($conexao, $sql);

        $r = pg_affected_rows($resultado);
        pg_close($conexao);

        if ($resultado) {
            echo "Produto removido com sucesso!";
            return $r;
        } else {
            echo "Erro ao remover produto!";
        }
    }

    public function alterar(Produto $produto)
    {
        $banco = new Banco();
        $conexao = $banco->conexao;

        $sql = "UPDATE produto SET descricao = '" . $produto->getDescricao() . "', preco = '" . $produto->getPreco() . "' WHERE codigo = '" . $produto->getCodigo() . "'";

        $resultado = pg_query($conexao, $sql);

        $r = pg_affected_rows($resultado);
        pg_close($conexao);

        if ($resultado) {
            echo "Produto alterado com sucesso!";
            return $r;
        } else {
            echo "Erro ao alterar produto!";
        }
    }
}