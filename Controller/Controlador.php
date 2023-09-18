<?php
$botao = strtolower(trim($_POST["b1"]));
// Key -> atributo name , Value -> atributo value

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
    default:
        echo "Botão não encontrado!";
        break;
}