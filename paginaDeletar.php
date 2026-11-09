<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletando Jogos da Plateleira</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h2>Excluindo Jogo</h2>
    <p>Informe o código do Jogo.</p>
    <form action="deletando.php" method="POST">
        <label for="codigo">Código: </label>
        <input type="text" name="codigo" id="codigo" required> <br> <br>

        <button type="submit">Deletar</button>
    </form>
</body>
</html>