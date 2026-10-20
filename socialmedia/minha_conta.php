
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha conta | Social Blue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Social <span>Blue</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="carrinho.php">Carrinho</a>
            <a href="login.php">Entrar</a>
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">
        <h1>Minha conta</h1>
        <p>Bem-vindo à área do cliente da Social Blue.</p>

        <div class="servicos">
            <div class="card">
                <h3>Meus dados</h3>
                <p>Área demonstrativa para visualizar os dados do cliente.</p>
                <a href="cadastro.php" class="btn">Ir para cadastro</a>
            </div>

            <div class="card">
                <h3>Meus pedidos</h3>
                <p>Seus pedidos poderão aparecer aqui quando houver integração com banco de dados.</p>
                <a href="carrinho.php" class="btn">Ver carrinho</a>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Social Blue.</p>
    </div>
</footer>

</body>
</html>
