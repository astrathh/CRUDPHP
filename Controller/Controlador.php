<?php
$botao = strtolower(trim($_GET["b1"]));
// Key -> atributo name , Value -> atributo value

switch ($botao) {
    case "gravar":
        //Header é uma função para enviar um cabeçalho HTTP(Para o cliente penso eu).
        header("Location: ..\\View/Gravar.php?txtCodigo=" . $_GET["txtCodigo"] . "&txtDescricao=" . $_GET["txtDescricao"] . "&txtPreco=" . $_GET["txtPreco"]);
        break;
    case "listar":
        header("Location: ..\\View/Listar.php");
        break;
    case "remover":
        header("Location: ..\\View/Remover.php?txtCodigo=" . $_GET["txtCodigo"]);
        break;
    case "alterar":
        //passa campos via sessão
        session_start();//inicia a sessão e viabiliza $_SESSION
        $_SESSION["txtCodigo"] = $_GET["txtCodigo"];
        $_SESSION["txtDescricao"] = $_GET["txtDescricao"];
        $_SESSION["txtPreco"] = $_GET["txtPreco"];
        header("Location: ../View/Alterar.php");
        break;
    default:
        echo "Botão não encontrado!";
        break;
}