
<?php
session_start();

if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = array();
}

$servicos = array(
    1 => array("nome" => "Gestão de Redes Sociais", "preco" => 299.90),
    2 => array("nome" => "Criação de Artes", "preco" => 149.90),
    3 => array("nome" => "Pacote de Conteúdo", "preco" => 199.90),
    4 => array("nome" => "Identidade Visual", "preco" => 249.90),
    5 => array("nome" => "Consultoria Digital", "preco" => 99.90),
    6 => array("nome" => "Pacote Completo", "preco" => 399.90)
);

if (empty($_SESSION["carrinho"])) {
    header("Location: carrinho.php");
    exit;
}

$total = 0;

foreach ($_SESSION["carrinho"] as $id => $quantidade) {
    if (isset($servicos[$id])) {
        $total += $servicos[$id]["preco"] * $quantidade;
    }
}

if (isset($_POST["confirmar"])) {
    $_SESSION["ultimo_pedido"] = $total;
    $_SESSION["carrinho"] = array();

    header("Location: finalizar_pedido.php?sucesso=1");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar pedido | Social Blue</title>
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
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">

        <?php if (isset($_GET["sucesso"])) { ?>

            <div class="formulario">
                <h1>Pedido confirmado!</h1>
                <div class="mensagem sucesso">
                    Sua demonstração de pedido foi finalizada.
                </div>
                <p>
                    Este é apenas um protótipo visual. Nenhuma compra real
                    foi registrada ou pagamento realizado.
                </p>
                <a href="index.php" class="btn">Voltar ao início</a>
            </div>

        <?php } else { ?>

            <div class="formulario">
                <h1>Finalizar pedido</h1>
                <p>Confira o valor total antes de confirmar.</p>

                <p class="total">
                    R$ <?php echo number_format($total, 2, ",", "."); ?>
                </p>

                <form method="post" action="finalizar_pedido.php">
                    <button type="submit" name="confirmar" value="1" class="btn">
                        Confirmar pedido de demonstração
                    </button>
                </form>

                <p class="link-formulario">
                    <a href="carrinho.php">Voltar ao carrinho</a>
                </p>
            </div>

        <?php } ?>

    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Social Blue.</p>
    </div>
</footer>

</body>
</html>
