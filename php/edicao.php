<!DOCTYPE html>
<html>
<head>
  <title>Editar Produto</title>
  <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>

    <?php
    if (isset($_GET['cod'])) {
      $cod_produto = $_GET['cod'];

      $servername = "localhost";
      $username = "root";
      $password = "1317";
      $database = "loja";

      $conn = new mysqli($servername, $username, $password, $database);

      if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
      }

      $sql = "SELECT cod_prod, nome_prod, valor_prod FROM produto WHERE cod_prod = $cod_produto";
      $result = $conn->query($sql);

      if ($result === false) {
        die("Erro na consulta: " . $conn->error);
      }

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $codigo = $row["cod_prod"];
        $nome = $row["nome_prod"];
        $valor = $row["valor_prod"];

        $conn->close();

      } else {
        echo '<p>Produto não encontrado.</p>';
      }
    } else {
      echo '<p>Código do produto não especificado.</p>';
    }
    ?>

    <div class="container">
      <h1>Editar Produto</h1>

      <form action="#" method="post">
        <div class="form-group">
          <label for="codigo">Código do Produto:</label>
          <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" required>
        </div>

        <div class="form-group">
          <label for="nome">Nome do Produto:</label>
          <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        </div>

        <div class="form-group">
          <label for="valor">Valor do Produto:</label>
          <input type="text" id="valor" name="valor" value="<?php echo $valor; ?>" required>
        </div>

    

        <div class="form-group">
          <input type="submit" value="Salvar">
          <a href="lista.php" class="back-button">Voltar</a>
        </div>
        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $codigo = $_POST['codigo'];
  $nome = $_POST['nome'];
  $valor = $_POST['valor'];

  $servername = "localhost";
  $username = "root";
  $password = "1317";
  $database = "loja";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
  }

  $sql = "UPDATE produto SET nome_prod = '$nome', valor_prod = '$valor' WHERE cod_prod = $codigo";

  if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso.";
  } else {
    echo "Erro na atualização: " . $conn->error;
  }

  $conn->close();
} 

?>

      </form>
  </div>
</body>
</html>
