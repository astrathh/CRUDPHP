<?php
$botao = strtolower(trim($_GET["b1"]));

switch ($botao) {
    case "cadastrar":
        include("../Model/Produto.php");
        include("../Model/Banco.php");
        include("../Model/ProdutoDAO.php");

        $produto = new Produto();
        $produto->setDescricao($_POST["descricao"]);
        $produto->setPreco($_POST["preco"]);

        $produtoDAO = new ProdutoDAO();
        $produtoDAO->gravar($produto);
        break;
    case "listar":
        include("../Model/Produto.php");
        include("../Model/Banco.php");
        include("../Model/ProdutoDAO.php");

        $produtoDAO = new ProdutoDAO();
        $produtoDAO->listar();
        break;
    case "remover":
        include("../Model/Produto.php");
        include("../Model/Banco.php");
        include("../Model/ProdutoDAO.php");

        $produto = new Produto();
        $produto->setCodigo($_POST["codigo"]);

        $produtoDAO = new ProdutoDAO();
        $produtoDAO->remover($produto);
        break;
    case "alterar":
        //passa campos via sessão
        session_start();//inicia a sessão e viabiliza $_SESSION
        $_SESSION["codigo"] = $_POST["codigo"];
        $_SESSION["descricao"] = $_POST["descricao"];
        $_SESSION["preco"] = $_POST["preco"];
        header("Location: ..\\View\Alterar.php");
        break;
    default:
        echo "Botão não encontrado!";
        break;
}