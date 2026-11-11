<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogos</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>

        <h2>Cadastro de Jogo</h2>
    <form action="inserir.php" method="post">
        <label for="nome">Nome</label><br><br>
        <input type="text" name="nome" required>
        <br><br>
        <label for="genero">Genero</label><br><br>
        <input type="text" name="genero" required><br>
        <br>
        <label for="lancamento">Lançamento</label><br><br>
        <input type="date" name="lancamento" required>
        <br><br>
        <label for="desenvolvedora">Desenvolvedora</label><br><br>
        <input type="text" name="desenvolvedora" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>