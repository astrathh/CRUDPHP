<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <?php
    include("../Controller/ProdutoDAO.php")

    //cria ou captura a sessao
    session_start();
    //$_SESSION['codigo'] -> pega o campo da sessao
    if (isset($_SESSION['codigo']){
        $dao = new ProdutoDAO();
        $obj = new Produto();
        $obj->setCodigo($_SESSION['codigo']);
        $obj->setDescricao($_SESSION['descricao']);
        $obj->setPreco($_SESSION['preco']);
        $r = $dao->alterar($obj);
    })
    ?>
</body>
</html>