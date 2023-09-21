<?php
    include_once(".\Model\Produto.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário do CRUD </h1>
        <!-- 
            O Atributo action.php é o script que o botão irá executar
            O Atributo method é o método que o formulário irá utilizar para enviar os dados
            O PHP armazena os valores do formulário em um array associativo chamado $_POST ou $_GET
            Esses valores vão ficar visíveis somente no script que recebeu os dados.
        -->
        <form action="Controller\Controlador.php" method="post">
            Código: <input type="text" name="txtCodigo" /> <br />
            Descrição: <input type="text" name="txtDescricao" /> <br />
            Preço: <input type="text" name="txtPreco" /> <br /><br />
            <input type="submit" name="b1" value="Gravar" />
            <input type="submit" name="b1" value="Alterar" />
            <input type="submit" name="b1" value="Remover" />
            <input type="submit" name="b1" value="Listar" />
        </form>
    <h1>Carrinho de Compras</h2>
    <?php
        session_start();
        $total = 0;
        foreach ($_SESSION["carrinho"] as $produto) {
            echo "<div> Codigo: " . $produto->getCodigo() . " Descrição: " . $produto->getDescricao() . " Preço: " . $produto->getPreco() . "</div>";
            $total += $produto->getPreco();

        }
        echo "Total: ". $total. " REAIS no total, parceiro";
    ?>

</body>
</html>