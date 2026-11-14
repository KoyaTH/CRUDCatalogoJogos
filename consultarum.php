<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }
    
    $codigo = $_POST['codigo'];
    
    $sql = "SELECT * FROM prateleira where codigo = $codigo;";
    $stm = $conexao->prepare($sql);

    $resultado = mysqli_query($conexao, $sql);
 
?>
  
<h3>Jogo Consultado:</h3>

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
        <?php
        echo '<button><a href="paginaConsultar.php">Voltar para a Tela de Consulta</a></button> <br>';
        ?>
    <?php else: ?>
        <p>Jogo não encontrando</p>
        <button><a href="paginaConsultar.php">Voltar para a Tela de Consulta</a></button> <br>
    <?php endif;?>
