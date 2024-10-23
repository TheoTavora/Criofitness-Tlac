<?php

// require_once(conn.php);

// Verifica se os campos Usuario e senha estão vazios
if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo 'O campo Email está vazio, preencha-o';
    } else if (strlen($_POST['senha']) == 0) {
        echo 'O campo senha está vazio, preencha-o';
    } else {

        //Se não estão vazios, então ele verifica os campos e se forem válidos, seu login é efetuado.
        $email = $connect->real_escape_string($_POST['email']);
        $senha = $connect->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente  WHERE emailCliente = '$email' AND senha = '$senha'";
        $sql_query = $connect->query($sql_code) or die("Falha na execução do código SQL: " . $connect->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['email'] = $usuario['nomeCliente'];
            header("Location: index.php"); // Caso tudo esteja de acordo com o Login, logo após fazê-lo você é redirecionado para a tela Index.php

        } else {
            echo 'Falha em logar! E-mail ou senha incorretos.';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Criofitnessimg/logotipoCrio.PNG">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <title>Faça seu login! - Criofitness</title>
</head>

<body>
    <div class="form-container">
        <h2>Acesse sua Conta</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>

        <div class="form-footer">
            <p>Não tem uma conta? <a href="#">Registre-se aqui!</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>