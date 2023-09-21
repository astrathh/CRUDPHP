<?php
include_once("../Model/Produto.php");
include_once("./Carrinho.php");

$botao = strtolower(trim($_POST["b1"]));
// Key -> atributo name , Value -> atributo value
$carrinho = array();
if(!isset($total))
{
    $total = 0;
}

switch ($botao) {
    case "gravar":
        //Header é uma função para enviar um cabeçalho HTTP(Para o cliente penso eu).
        header("Location: ..\\View/Gravar.php?txtCodigo=" . $_POST["txtCodigo"] . "&txtDescricao=" . $_POST["txtDescricao"] . "&txtPreco=" . $_POST["txtPreco"]);
        break;
    case "listar":
        header("Location: ..\\View/Listar.php");
        break;
    case "remover":
        header("Location: ..\\View/Remover.php?txtCodigo=" . $_POST["txtCodigo"]);
        break;
    case "alterar":
        //passa campos via sessão
        session_start();//inicia a sessão e viabiliza $_SESSION
        $_SESSION["txtCodigo"] = $_POST["txtCodigo"];
        $_SESSION["txtDescricao"] = $_POST["txtDescricao"];
        $_SESSION["txtPreco"] = $_POST["txtPreco"];
        header("Location: ../View/Alterar.php");
        break;
    case "adicionar ao carrinho":

        $preco = $_POST["txtPreco"];
        $descricao = $_POST["txtDescricao"];
        $codigo = $_POST["txtCodigo"];
        
        $produto = new Produto();
        $produto->setCodigo($codigo);
        $produto->setDescricao($descricao);
        $produto->setPreco($preco);
        
        session_start();
        array_push($_SESSION["carrinho"],$produto);
        header("Location: ../Index.php");        

        break;
    case "total":
        session_start();
        foreach ($_SESSION["carrinho"] as $produto) {
            $total += $produto->getPreco();
        }
        echo $total;

        break;
    default:
        echo "Botão não encontrado!";
        break;
}