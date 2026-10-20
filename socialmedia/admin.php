
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo | Social Blue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Social <span>Blue</span></a>
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="minha_conta.php">Minha conta</a>
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">
        <h1>Painel administrativo</h1>
        <p>Área demonstrativa de administração da Social Blue.</p>

        <div class="servicos">
            <div class="card">
                <h3>Serviços</h3>
                <p>Visualização dos serviços disponíveis na plataforma.</p>
                <a href="index.php" class="btn">Ver serviços</a>
            </div>

            <div class="card">
                <h3>Pedidos</h3>
                <p>Os pedidos poderão ser administrados após a integração com banco de dados.</p>
                <a href="carrinho.php" class="btn">Ver carrinho</a>
            </div>

            <div class="card">
                <h3>Clientes</h3>
                <p>O cadastro e o gerenciamento de clientes ainda não estão conectados a um banco de dados.</p>
                <a href="cadastro.php" class="btn">Ver cadastro</a>
            </div>
        </div>

        <div class="mensagem">
            Este painel é apenas visual. Não possui autenticação administrativa.
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
