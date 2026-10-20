
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

if (isset($_GET["remover"])) {
    $idRemover = (int) $_GET["remover"];

    if (isset($_SESSION["carrinho"][$idRemover])) {
        unset($_SESSION["carrinho"][$idRemover]);
    }

    header("Location: carrinho.php");
    exit;
}

$total = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu carrinho | Social Blue</title>
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
            <a href="cadastro.php">Cadastrar</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </div>
</header>

<main class="pagina">
    <div class="container">
        <h1>Meu carrinho</h1>
        <p>Confira os serviços escolhidos antes de continuar.</p>

        <?php if (empty($_SESSION["carrinho"])) { ?>

            <div class="mensagem">
                Seu carrinho está vazio.
            </div>

            <a href="index.php" class="btn">Ver serviços</a>

        <?php } else { ?>

            <div class="tabela-container">
                <table>
                    <thead>
                        <tr>
                            <th>Serviço</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Subtotal</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($_SESSION["carrinho"] as $id => $quantidade) { ?>

                            <?php
                            if (!isset($servicos[$id])) {
                                continue;
                            }

                            $subtotal = $servicos[$id]["preco"] * $quantidade;
                            $total += $subtotal;
                            ?>

                            <tr>
                                <td>
                                    <?php echo htmlspecialchars($servicos[$id]["nome"]); ?>
                                </td>

                                <td>
                                    R$ <?php echo number_format($servicos[$id]["preco"], 2, ",", "."); ?>
                                </td>

                                <td><?php echo $quantidade; ?></td>

                                <td>
                                    R$ <?php echo number_format($subtotal, 2, ",", "."); ?>
                                </td>

                                <td>
                                    <a class="btn btn-perigo"
                                       href="carrinho.php?remover=<?php echo $id; ?>">
                                        Remover
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <p class="total">
                Total: R$ <?php echo number_format($total, 2, ",", "."); ?>
            </p>

            <div class="acoes">
                <a href="index.php" class="btn-secundario">Continuar comprando</a>
                <a href="finalizar_pedido.php" class="btn">Finalizar pedido</a>
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
