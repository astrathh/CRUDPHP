<?php 
include_once("../Controller/ProdutoDAO.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
</head>
<body>
    <?php
    $prodDAO = new ProdutoDAO();
    $prod = new Produto();
    
    $prod->setCodigo($_GET["txtCodigo"]);

    $r = $prodDAO->remover($prod);
    ?>
</body>
</html>