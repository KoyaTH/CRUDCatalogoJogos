<?php
  
  require 'conexao.php';

  if(!isset($conexao)){
    die("Erro ao conectar no banco de dados");
  }


  $nome = $_POST["nome"];
  $genero = $_POST["genero"];
  $lancamento = $_POST["lancamento"];
  $desenvolvedora = $_POST["desenvolvedora"];

  $sql = "insert into prateleira (nome, genero, lancamento, desenvolvedora) values (?, ?, ?, ?);";

  $stm = $conexao->prepare($sql);

  $stm->bind_param("ssss", $nome, $genero, $lancamento, $desenvolvedora);

  if($stm->execute())
    echo "Jogo cadastrado com sucesso!";
  else
    echo "Erro ao cadastrar jogo.";
  
  $stm->close();

  $conexao->close();

  echo "<br><br>";
  echo '<a href="index.php">Voltar</a>';

?>
