<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .login-container {
      width: 600px;
      margin: 300px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-header h2 {
      color: #3498db;
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #2980b9;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h2>Login</h2>
    </div>
    <form method="post" action="index.php" class="login-form">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" required><br>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required><br>

      <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Configurações do banco de dados
      $host = 'localhost';
      $username = 'phpmyadmin';
      $password = 'aluno';
      $database = 'TutoCrudPhp';

      // Conectar ao banco de dados
      $conn = new mysqli($host, $username, $password, $database);

      // Verificar a conexão
      if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
      }

      // Receber os dados do formulário
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      // Consultar o banco de dados para verificar as credenciais
      $query = "SELECT * FROM Cliente WHERE email = '$email' AND senha = '$senha'";
      $result = $conn->query($query);

      if ($result->num_rows == 1) {
        // Login bem-sucedido
        echo "Login bem-sucedido!";
        session_start();
        $_SESSION['email'] = $email;
        header("Location: painel.php");
        exit(); // Certifique-se de sair para evitar que o restante do código seja executado
      } else {
        $sucesso = "Dados cadastrados com sucesso!";
        header("Location: tela_inicial.php");
      }

      // Fechar a conexão com o banco de dados
      $conn->close();
    }
    ?>

  </div>

</body>

</html>
