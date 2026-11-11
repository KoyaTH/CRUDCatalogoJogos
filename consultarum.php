<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }

    $sql = "SELECT * FROM prateleira where codigo = $_POST['codigo'];";
    $resultado = mysqli_query($conexao, $sql);
 
?>

<h3>Lista de Jogos Cadastrados</h3>

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
