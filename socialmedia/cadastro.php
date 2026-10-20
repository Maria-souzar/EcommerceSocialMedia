
<?php
session_start();

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST["nome"]) ? trim($_POST["nome"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

    if ($nome == "" || $email == "" || $senha == "") {
        $mensagem = "Preencha todos os campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Digite um e-mail válido.";
    } else {
        $mensagem = "Cadastro demonstrativo preenchido! Os dados não foram salvos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Social Blue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Social <span>Blue</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="login.php">Entrar</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">
        <form class="formulario" method="post" action="cadastro.php">
            <h1>Criar conta</h1>
            <p>Faça seu cadastro na Social Blue.</p>

            <?php if ($mensagem != "") { ?>
                <div class="mensagem">
                    <?php echo htmlspecialchars($mensagem); ?>
                </div>
            <?php } ?>

            <div class="campo">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>

            <p class="link-formulario">
                Já tem uma conta? <a href="login.php">Entrar</a>
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
