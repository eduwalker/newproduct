<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $codigo = $_POST["codigo"];
  $nome = $_POST["nome"];
  $valor = $_POST["valor"];

  $servername = "localhost";
  $username = "root";
  $password = "1317";
  $database = "loja";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
  }


  $sql = "INSERT INTO produto (cod_prod, nome_prod, valor_prod) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $codigo, $nome, $valor);


  if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
  } else {
    echo "Erro ao cadastrar o produto: " . $stmt->error;
  }
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar Produto</title>
  <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>

  <div class="container">
    <h1>Cadastrar Produto</h1>



    <form action="#" method="post">
      <div class="form-group">
        <label for="codigo">Código do Produto:</label>
        <input type="text" id="codigo" name="codigo" required>
      </div>


      <div class="form-group">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>
      </div>


      <div class="form-group">
        <label for="valor">Valor do Produto:</label>
        <input type="text" id="valor" name="valor" required>
      </div>


      <div class="form-group">
        <input type="submit" value="Cadastrar">
        <a href="index.php" class="back-button">Voltar</a>
      </div>
    </form>

  </div>



</body>
</html>