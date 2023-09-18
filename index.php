<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário do CRUD </h1>
        <form action="Controller\Controlador.php" method="post">
            Código: <input type="text" name="txtCodigo" /> <br />
            Descrição: <input type="text" name="txtDescricao" /> <br />
            Preço: <input type="text" name="txtPreco" /> <br /><br />
            <input type="submit" name="b1" value="Gravar" />
            <input type="submit" name="b1" value="Alterar" />
            <input type="submit" name="b1" value="Remover" />
            <input type="submit" name="b1" value="Listar" />
        </form>
</body>
</html>