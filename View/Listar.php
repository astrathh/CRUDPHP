<?php 
// Include -> Caso de erro, o programa continua
// Require -> Caso de erro, o programa para
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

    $tabela = $prodDAO->listar();

    if ($tabela) {
        echo "<h1> Lista de produtos </h1><br/>";
        while ($linha = pg_fetch_array($tabela)) {
            echo "Codigo: $linha[0] Descricao: $linha[1] Preco: $linha[2] <br/>";
            //linha == false;
        }
    } else
        echo "Tabela vazia";
    ?>
</body>
</html>