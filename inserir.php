<?php
  
  require 'conexao.php';

  $nome = $_POST["nome"];
  $genero = $_POST["genero"];
  $lancamento = $_POST["lancamento"];
  $desenvolvedor = $_POST["desenvolvedora"];

  $sql = "INSERT INTO PRATELEIRA (NOME, GENERO, LANCAMENTO, DESENVOLVEDORA) VALUES (?, ?, ?, ?);";

  $stm = $conexao->prepare($sql);

  $stm->bind_param("ssds", $nome, $genero, $lancamento, $desenvolvedora);

  if($stm->execute())
    echo "Jogo cadastrado com sucesso!";
  else
    echo "Erro ao cadastrar jogo.";
  
  $stm->close();

  $conexao->close();

  echo "<br><br>";
  echo '<a href="index.php">Voltar</a>';

?>
