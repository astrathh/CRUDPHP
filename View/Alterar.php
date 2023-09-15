<?php 
include("../Controller/ProdutoDAO.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <?php
    //Vamos usar barra simples para definir o diretório.
    
    if (isset($_SESSION['txtCodigo'])) {
        $prodDAO = new ProdutoDAO();
        $prod = new Produto();
        $prod->setCodigo($_SESSION['txtCodigo']);
        $prod->setDescricao($_SESSION['txtDescricao']);
        $prod->setPreco($_SESSION['txtPreco']);
        $r = $prodDAO->alterar($prod);
    }
    //cria ou captura a sessao
    //$_SESSION['txtCodigo'] -> pega o campo HTML da sessão
  
    ?>
</body>
</html>