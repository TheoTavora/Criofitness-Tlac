<?php
//include ('conn.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coleta os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $telefone = htmlspecialchars($_POST['telefone']);

    // Validação simples de campos
    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($telefone)) {
        // $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

        echo "<h2>Cadastro realizado com sucesso!</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Telefone: $telefone</p>";
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Criofitnessimg/logotipoCrio.PNG">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    <title>Faça seu cadastro! - Criofitness</title>
</head>

<body>
    <div class="form-container">
        <h2>Criar Conta</h2>
        <form action="cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
            </div>
            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>

        <div class="form-footer">
            <p>Já tem uma conta? <a href="#">Login</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>