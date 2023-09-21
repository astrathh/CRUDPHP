<!-- Acho que essa página é uma requesição HTTP -->
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
    $prodDAO = new ProdutoDAO();
    $prod = new Produto();

    $prod->setDescricao($_GET["txtDescricao"]);
    $prod->setPreco($_GET["txtPreco"]);
    $r = $prodDAO->gravar($prod);
    ?>
</body>
</html>