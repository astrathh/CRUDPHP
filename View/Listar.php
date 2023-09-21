<?php 
// Include -> Caso de erro, o programa continua
// Require -> Caso de erro, o programa para.
include_once("../Controller/ProdutoDAO.php");
include_once("../Model/Produto.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <?php

    $prodDAO = new ProdutoDAO();

    $tabela = $prodDAO->listar();

    if ($tabela) {
        echo "<h1> Lista de produtos </h1><br/>";
        while ($linha = pg_fetch_array($tabela)) {
            echo <<< HTML
            <div>
                Codigo: $linha[0] Descricao: $linha[1] Preco: $linha[2]
                <form action="../Controller/Controlador.php" method="post">

                    <input type="text" hidden="true" name="txtCodigo" value=$linha[codigo] />
                    <input type="text" hidden="true" name="txtDescricao" value=$linha[descricao] />
                    <input type="text" hidden="true" name="txtPreco" value=$linha[preco] />
                    <input type="submit" name="b1" value="Adicionar ao Carrinho"/>
                </form>
            </div>
            HTML;
            //linha == false;
        }
    } else
        echo "Tabela vazia";
    ?>
    <!-- botão para adicionar produtos para o carrinho -->

</body>
</html>