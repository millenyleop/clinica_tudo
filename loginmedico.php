<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="loginmedico.php">
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
        $database = 'Medicos';

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
            header("Location: index2.php");
            exit(); // Certifique-se de sair para evitar que o restante do código seja executado
        } else {
            // Login falhou
            echo "Credenciais inválidas. Tente novamente.";
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    }
    ?>
</body>
</html>
