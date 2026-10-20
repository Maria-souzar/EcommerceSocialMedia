
<?php
session_start();

if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = array();
}

$servicos = array(
    1 => array(
        "nome" => "Gestão de Redes Sociais",
        "descricao" => "Planejamento de conteúdo e organização do perfil da sua marca.",
        "preco" => 299.90
    ),
    2 => array(
        "nome" => "Criação de Artes",
        "descricao" => "Artes personalizadas para valorizar sua identidade visual.",
        "preco" => 149.90
    ),
    3 => array(
        "nome" => "Pacote de Conteúdo",
        "descricao" => "Conteúdos planejados para melhorar sua presença digital.",
        "preco" => 199.90
    ),
    4 => array(
        "nome" => "Identidade Visual",
        "descricao" => "Elementos visuais para apresentar melhor sua marca.",
        "preco" => 249.90
    ),
    5 => array(
        "nome" => "Consultoria Digital",
        "descricao" => "Orientações para desenvolver sua estratégia nas redes sociais.",
        "preco" => 99.90
    ),
    6 => array(
        "nome" => "Pacote Completo",
        "descricao" => "Uma combinação de serviços para fortalecer sua presença online.",
        "preco" => 399.90
    )
);

$totalItens = 0;

foreach ($_SESSION["carrinho"] as $quantidade) {
    $totalItens += $quantidade;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Blue | Marketing Digital</title>
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
            <a href="carrinho.php">Carrinho (<?php echo $totalItens; ?>)</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-content">
            <div>
                <h1>Transforme sua presença digital com a Social Blue.</h1>

                <p>
                    Soluções criativas para marcas que desejam crescer,
                    comunicar melhor e conquistar espaço nas redes sociais.
                </p>

                <a href="#servicos" class="btn">Conheça nossos serviços</a>
            </div>

            <div class="hero-card">
                <h3>Sua marca merece destaque.</h3>
                <p>Estratégia, criatividade e planejamento em um só lugar.</p>
                <p>✨ Conteúdo criativo</p>
                <p>📱 Presença digital</p>
                <p>🚀 Mais oportunidades</p>
            </div>
        </div>
    </section>

    <section class="secao" id="servicos">
        <div class="container">
            <div class="secao-titulo">
                <h2>Nossos serviços</h2>
                <p>Escolha a solução ideal para sua marca.</p>
            </div>

            <div class="servicos">
                <?php foreach ($servicos as $id => $servico) { ?>
                    <div class="card">
                        <h3><?php echo htmlspecialchars($servico["nome"]); ?></h3>

                        <p>
                            <?php echo htmlspecialchars($servico["descricao"]); ?>
                        </p>

                        <span class="preco">
                            R$ <?php echo number_format($servico["preco"], 2, ",", "."); ?>
                        </span>

                        <form action="adicionar_carrinho.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn">
                                Adicionar ao carrinho
                            </button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Vamos desenvolver sua marca?</h2>
            <p>Conheça nossas soluções e encontre o serviço ideal.</p>
            <a href="sobre.php" class="btn">Conheça a Social Blue</a>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Social Blue. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
