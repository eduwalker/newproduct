<!DOCTYPE html>
<html>
<head>
  <title>Editar Produto</title>
  <link rel="stylesheet" href="../css/deletar.css">
</head>
<body>
  <div class="container">
    <h1>EXCLUSÃO DE PRODUTO</h1>
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

      $sql = "DELETE FROM produto WHERE cod_prod = $cod_produto";
      $result = $conn->query($sql);

      if ($result === false) {
        die("Erro na consulta: " . $conn->error);
      }
 
      echo '<p>Produto de código ' . $cod_produto . ' deletado com sucesso!</p>';
    } else {
      echo '<p>Produto não encontrado.</p>';
    }



    ?>
    <a href="lista.php" class="back-button">Voltar</a>
  </div>
</body>
</html>
