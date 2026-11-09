<?php
    include 'conexao.php';

    if(!isset($conexao)){
        die("Erro ao conectar no banco de dados");
    }

    $codigo = (int)$_POST['codigo'];

    $sql = "DELETE FROM prateleira WHERE CODIGO = ?;";
    $stm = $conexao->prepare($sql);
    $stm->bind_param("i", $codigo);

    if($stm->execute()){
        echo "Jogo Deletado com sucesso <br>";
    }else{
        echo "Erro ao cadastrar aluno <br>";
    }
    echo '<button><a href="index.php">Menu</a></button> <br>';
    echo '<button><a href="paginaDeletar.php">Voltar para a Tela de Deletar</a></button> <br>';
    echo '<button><a href="paginaConsultar.php">Voltar para a Tela de Consulta</a></button> <br>';

    $stm->close();
    $conexao->close();
?>