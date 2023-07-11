<!DOCTYPE html>
<html>
<head>
  <title>Produtos Cadastrados</title>
  <link rel="stylesheet" href="../css/lista.css">
</head>
<body>
  <div class="container">
    <h1>Produtos Cadastrados</h1>
    <div class="product-list">
      <?php

      $servername = "localhost";
      $username = "root";
      $password = "1317";
      $database = "loja";

      $conn = new mysqli($servername, $username, $password, $database);

   
      if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
      }



      $sql = "SELECT cod_prod, nome_prod, valor_prod FROM produto";
      $result = $conn->query($sql);

      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $cod = $row["cod_prod"];
          echo '<div class="product">';
          echo '<div class="product-code">Código: ' . $row["cod_prod"] . '</div>';
          echo '<div class="product-name">' . $row["nome_prod"] . '</div>';
          echo '<div class="product-value">Valor: R$ ' . $row["valor_prod"] . '</div>';
          echo '<div class="product-actions">';
          echo '<a href="edicao.php?cod=' . $row["cod_prod"] . '" class="action-button edit">Editar</a>';
          echo '<a href="deletar.php?cod=' . $row["cod_prod"] . '" class="action-button delete">Excluir</a>';
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo '<p>Nenhum produto cadastrado.</p>';
      }


      $conn->close();
      ?>
    </div>
    <a href="index.php" class="back-button">Voltar</a>
  </div>
</body>
</html>