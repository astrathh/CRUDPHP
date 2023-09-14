<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    include("../Controller/ProdutoDAO.php");
    $produtoDAO = new ProdutoDAO();
    $obj = new Produto();

    $obj->setDescricao($_GET["descricao"]);
    $obj->setPreco($_GET["preco"]);
    $r = $dao->gravar($obj);
    ?>
</body>
</html>