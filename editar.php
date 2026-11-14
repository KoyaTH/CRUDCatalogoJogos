
<?php
include 'conexao.php';

if (!isset($conexao)) {
    die("Erro ao conectar no banco de dados");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $lancamento = $_POST['lancamento'];
    $desenvolvedora = $_POST['desenvolvedora'];

    $sql = "UPDATE prateleira
            SET nome = ?, genero = ?, lancamento = ?, desenvolvedora = ?
            WHERE codigo = ?";

    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssssi",
        $nome,
        $genero,
        $lancamento,
        $desenvolvedora,
        $codigo
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "Jogo atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o jogo!";
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
} else {
    if (!isset($_GET['codigo'])) {
        die("Código não informado!");
    }

    $codigo = $_GET['codigo'];
}

$sql = "SELECT * FROM prateleira WHERE codigo = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $codigo);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if ($resultado->num_rows > 0) {
    $jogo = mysqli_fetch_assoc($resultado);
} else {
    die("Nenhum jogo encontrado!");
}

?>

<h3>Editar Jogo</h3>

<form action="editar.php" method="POST">

    <input type="hidden" name="codigo"
           value="<?php echo htmlspecialchars($jogo['codigo']); ?>">

    <label>Nome:</label>
    <input type="text" name="nome"
           value="<?php echo htmlspecialchars($jogo['nome']); ?>" required>
    <br><br>

    <label>Gênero:</label>
    <input type="text" name="genero"
           value="<?php echo htmlspecialchars($jogo['genero']); ?>" required>
    <br><br>

    <label>Lançamento:</label>
    <input type="text" name="lancamento"
           value="<?php echo htmlspecialchars($jogo['lancamento']); ?>" required>
    <br><br>

    <label>Desenvolvedora:</label>
    <input type="text" name="desenvolvedora"
           value="<?php echo htmlspecialchars($jogo['desenvolvedora']); ?>" required>
    <br><br>

    <button type="submit">Salvar alterações</button>
    <button><a href="index.php">Voltar</a></button>
    
</form>

