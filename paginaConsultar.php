<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }

    $sql = "SELECT * FROM prateleira;";
    $resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultando Jogos</title>
</head>
<body>
    <button><a href="index.php">Menu</a></button> <br>
    <h3>Lista de Jogo cadastrado</h3>
    <?php if($resultado->num_rows > 0) : ?>
        <table border="1" cellpading="5" cellspacing="0">
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>Gênero</td>
                <td>Laçamento</td>
                <td>Desenvolvedora</td>
            </tr>
            <?php while($linha = $resultado->fetch_assoc()) : ?>
                <tr>
                    
                    <td><?php echo $linha["codigo"]?></td>
                    <td><?php echo $linha["nome"]?></td>
                    <td><?php echo $linha["genero"]?></td>
                    <td><?php echo $linha["lancamento"]?></td>
                    <td><?php echo $linha["desenvolvedora"]?></td>
                </tr>
                <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p>Nenhum Jogo cadastrado!</p>
        <?php endif;?>
</body>
<?php $conexao->close();?>
</html>