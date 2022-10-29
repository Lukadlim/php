<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add contacts</title>
</head>
<body>
    <form action="add_contact_submit.php" method="post">
        <p>
            <label for="iname">Nome: </label>
            <input type="text" name="text_name" id="iname">
        </p>
        <p>
            <label for="itel">Telefone: </label>
            <input type="tel" name="text_phone" id="itel">
        </p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>