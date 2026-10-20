
<?php
session_start();

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

    if ($email == "" || $senha == "") {
        $mensagem = "Preencha o e-mail e a senha.";
    } else {
        $mensagem = "Login demonstrativo. A autenticação ainda não está configurada.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | Social Blue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Social <span>Blue</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">
        <form class="formulario" method="post" action="login.php">
            <h1>Bem-vindo!</h1>
            <p>Acesse sua conta Social Blue.</p>

            <?php if ($mensagem != "") { ?>
                <div class="mensagem">
                    <?php echo htmlspecialchars($mensagem); ?>
                </div>
            <?php } ?>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn">Entrar</button>

            <p class="link-formulario">
                Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
            </p>
        </form>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Social Blue.</p>
    </div>
</footer>

</body>
</html>
