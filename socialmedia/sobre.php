

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre nós | Social Blue</title>

    <meta name="description"
          content="Conheça a Social Blue, uma proposta criativa para fortalecer marcas e desenvolver presenças digitais.">

    <link rel="stylesheet" href="style.css">

    <style>
        /* APRESENTAÇÃO */

        .sobre-hero {
            padding: 75px 0 65px;
            background: #eef3ff;
            border-bottom: 1px solid #e0e8f7;
        }

        .sobre-hero-conteudo {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 65px;
            align-items: center;
        }

        .sobre-etiqueta {
            display: inline-block;
            padding: 7px 13px;
            margin-bottom: 20px;
            border-radius: 20px;
            background: #dce8ff;
            color: #1264db;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sobre-hero h1 {
            max-width: 650px;
            margin-bottom: 22px;
            color: #082f49;
            font-size: clamp(34px, 4vw, 50px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .sobre-hero h1 span {
            color: #1264db;
        }

        .sobre-hero-texto {
            max-width: 580px;
            margin-bottom: 28px;
            color: #53647b;
            font-size: 15px;
            line-height: 1.9;
        }

        .sobre-botoes {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .sobre-destaque {
            padding: 34px;
            background: #ffffff;
            border: 1px solid #e5eaf4;
            border-radius: 14px;
            box-shadow: 0 15px 40px rgba(8, 47, 73, 0.07);
        }

        .sobre-destaque-numero {
            color: #1264db;
            font-size: 42px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 18px;
        }

        .sobre-destaque h2 {
            color: #082f49;
            font-size: 21px;
            margin-bottom: 12px;
        }

        .sobre-destaque p {
            color: #737987;
            font-size: 13px;
            line-height: 1.9;
        }

        .sobre-linha {
            height: 1px;
            background: #e8eaf0;
            margin: 23px 0;
        }

        /* SEÇÕES */

        .sobre-secao {
            padding: 70px 0;
        }

        .sobre-titulo {
            max-width: 650px;
            margin-bottom: 35px;
        }

        .sobre-titulo .sobre-subtitulo {
            display: block;
            margin-bottom: 12px;
            color: #1264db;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .sobre-titulo h2 {
            color: #082f49;
            font-size: clamp(26px, 3vw, 34px);
            letter-spacing: -0.8px;
            margin-bottom: 15px;
        }

        .sobre-titulo p {
            color: #737987;
            font-size: 14px;
            line-height: 1.9;
        }

        /* PROPÓSITO */

        .sobre-proposito {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
        }

        .sobre-proposito-card {
            padding: 30px;
            background: #ffffff;
            border: 1px solid #e8eaf0;
            border-radius: 12px;
        }

        .sobre-icone {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            margin-bottom: 20px;
            border-radius: 10px;
            background: #eaf2ff;
            color: #1264db;
            font-size: 20px;
            font-weight: 700;
        }

        .sobre-proposito-card h3 {
            margin-bottom: 12px;
            color: #082f49;
            font-size: 19px;
        }

        .sobre-proposito-card p {
            color: #737987;
            font-size: 13px;
            line-height: 1.9;
        }

        /* VALORES */

        .sobre-valores {
            background: #ffffff;
            border-top: 1px solid #e8eaf0;
            border-bottom: 1px solid #e8eaf0;
        }

        .sobre-valores-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 30px;
        }

        .sobre-valor {
            padding: 10px 0;
        }

        .sobre-valor-numero {
            display: block;
            margin-bottom: 14px;
            color: #1264db;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .sobre-valor h3 {
            color: #082f49;
            font-size: 17px;
            margin-bottom: 10px;
        }

        .sobre-valor p {
            color: #737987;
            font-size: 13px;
            line-height: 1.9;
        }

        /* METODOLOGIA */

        .sobre-etapas {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .sobre-etapa {
            padding: 25px;
            background: #ffffff;
            border: 1px solid #e8eaf0;
            border-radius: 10px;
        }

        .sobre-etapa-numero {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            margin-bottom: 18px;
            border-radius: 50%;
            background: #082f49;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
        }

        .sobre-etapa h3 {
            color: #082f49;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .sobre-etapa p {
            color: #737987;
            font-size: 13px;
            line-height: 1.9;
        }

        /* CHAMADA FINAL */

        .sobre-final {
            padding: 55px 30px;
            border-radius: 14px;
            background: #082f49;
            text-align: center;
        }

        .sobre-final .sobre-subtitulo {
            display: block;
            margin-bottom: 12px;
            color: #a9c9ff;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .sobre-final h2 {
            max-width: 650px;
            margin: 0 auto 15px;
            color: #ffffff;
            font-size: clamp(26px, 3vw, 34px);
        }

        .sobre-final p {
            max-width: 570px;
            margin: 0 auto 25px;
            color: #d2deeb;
            font-size: 13px;
            line-height: 1.9;
        }

        .sobre-final .btn {
            background: #ffffff;
            border-color: #ffffff;
            color: #082f49;
        }

        .sobre-final .btn:hover {
            background: #eaf2ff;
            border-color: #eaf2ff;
        }

        /* RESPONSIVIDADE */

        @media (max-width: 800px) {
            .sobre-hero {
                padding: 50px 0;
            }

            .sobre-hero-conteudo {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .sobre-proposito {
                grid-template-columns: 1fr;
            }

            .sobre-valores-grid,
            .sobre-etapas {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .sobre-secao {
                padding: 50px 0;
            }
        }

        @media (max-width: 480px) {
            .sobre-hero h1 {
                font-size: 33px;
            }

            .sobre-destaque,
            .sobre-proposito-card,
            .sobre-etapa {
                padding: 23px;
            }

            .sobre-botoes {
                flex-direction: column;
            }

            .sobre-botoes a {
                text-align: center;
            }

            .sobre-final {
                padding: 38px 22px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">
            Social <span>Blue</span>
        </a>

        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="login.php">Entrar</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </div>
</header>

<main>

    <!-- APRESENTAÇÃO -->

    <section class="sobre-hero">
        <div class="container sobre-hero-conteudo">

            <div>
                <span class="sobre-etiqueta">
                    Conheça a Social Blue
                </span>

                <h1>
                    Ideias que conectam.
                    <span>Marcas que crescem.</span>
                </h1>

                <p class="sobre-hero-texto">
                    Acreditamos que uma presença digital bem construída
                    começa com estratégia, criatividade e compreensão
                    das necessidades de cada negócio. A Social Blue
                    reúne soluções pensadas para ajudar marcas a
                    comunicar seu valor e fortalecer sua identidade
                    no ambiente digital.
                </p>

                <div class="sobre-botoes">
                    <a href="index.php#servicos" class="btn">
                        Conheça nossos serviços
                    </a>

                    <a href="index.php" class="btn-secundario">
                        Voltar ao início
                    </a>
                </div>
            </div>

            <div class="sobre-destaque">
                <div class="sobre-destaque-numero">01</div>

                <h2>Presença digital com propósito.</h2>

                <p>
                    Mais do que publicar conteúdos, queremos valorizar
                    a identidade de cada marca, transmitir mensagens
                    com clareza e contribuir para uma comunicação
                    digital mais consistente.
                </p>

                <div class="sobre-linha"></div>

                <p>
                    <strong>Nosso foco:</strong> criatividade,
                    planejamento e soluções alinhadas aos objetivos
                    de cada projeto.
                </p>
            </div>

        </div>
    </section>

    <!-- NOSSA ESSÊNCIA -->

    <section class="sobre-secao">
        <div class="container">

            <div class="sobre-titulo">
                <span class="sobre-subtitulo">Nossa essência</span>

                <h2>Uma comunicação que faz sentido para sua marca.</h2>

                <p>
                    Cada negócio possui uma história, um público e
                    objetivos próprios. Por isso, acreditamos que
                    uma boa estratégia digital deve respeitar essas
                    características e transformar ideias em uma
                    comunicação coerente, atrativa e profissional.
                </p>
            </div>

            <div class="sobre-proposito">

                <article class="sobre-proposito-card">
                    <div class="sobre-icone">↗</div>

                    <h3>Nosso propósito</h3>

                    <p>
                        Ajudar marcas e empreendedores a desenvolver
                        uma presença digital mais organizada,
                        fortalecer sua identidade e apresentar
                        seus serviços de maneira clara e atrativa.
                    </p>
                </article>

                <article class="sobre-proposito-card">
                    <div class="sobre-icone">✳</div>

                    <h3>Nossa visão</h3>

                    <p>
                        Construir uma marca reconhecida pela
                        criatividade, pelo cuidado com cada projeto
                        e pela busca constante de soluções que
                        aproximem negócios de seus públicos.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- NOSSOS VALORES -->

    <section class="sobre-secao sobre-valores">
        <div class="container">

            <div class="sobre-titulo">
                <span class="sobre-subtitulo">O que nos orienta</span>

                <h2>Princípios por trás de cada projeto.</h2>

                <p>
                    Uma boa presença digital não depende apenas
                    da aparência. Ela também exige intenção,
                    consistência e atenção aos detalhes.
                </p>
            </div>

            <div class="sobre-valores-grid">

                <article class="sobre-valor">
                    <span class="sobre-valor-numero">01 / CRIATIVIDADE</span>

                    <h3>Ideias com identidade</h3>

                    <p>
                        Buscamos soluções visuais e comunicativas
                        que valorizem a personalidade de cada
                        negócio, evitando uma comunicação genérica.
                    </p>
                </article>

                <article class="sobre-valor">
                    <span class="sobre-valor-numero">02 / ESTRATÉGIA</span>

                    <h3>Planejamento com intenção</h3>

                    <p>
                        Cada conteúdo deve ter um propósito:
                        apresentar, informar, gerar interesse
                        ou fortalecer o relacionamento com o público.
                    </p>
                </article>

                <article class="sobre-valor">
                    <span class="sobre-valor-numero">03 / CUIDADO</span>

                    <h3>Atenção aos detalhes</h3>

                    <p>
                        Valorizamos a organização, a clareza
                        na comunicação e o cuidado em cada etapa
                        do desenvolvimento de um projeto.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- NOSSO PROCESSO -->

    <section class="sobre-secao">
        <div class="container">

            <div class="sobre-titulo">
                <span class="sobre-subtitulo">Como trabalhamos</span>

                <h2>Do planejamento à presença digital.</h2>

                <p>
                    Organizamos o trabalho em etapas para compreender
                    as necessidades do projeto e desenvolver soluções
                    de maneira mais consistente.
                </p>
            </div>

            <div class="sobre-etapas">

                <article class="sobre-etapa">
                    <div class="sobre-etapa-numero">1</div>

                    <h3>Entender</h3>

                    <p>
                        Conhecemos o negócio, seus objetivos,
                        seu público e a mensagem que deseja transmitir.
                    </p>
                </article>

                <article class="sobre-etapa">
                    <div class="sobre-etapa-numero">2</div>

                    <h3>Planejar</h3>

                    <p>
                        Organizamos as ideias e definimos uma direção
                        visual e comunicativa coerente com a identidade
                        da marca.
                    </p>
                </article>

                <article class="sobre-etapa">
                    <div class="sobre-etapa-numero">3</div>

                    <h3>Desenvolver</h3>

                    <p>
                        Criamos as soluções propostas com atenção
                        à apresentação, à consistência e aos objetivos
                        definidos para o projeto.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- CHAMADA FINAL -->

    <section class="sobre-secao">
        <div class="container">

            <div class="sobre-final">
                <span class="sobre-subtitulo">
                    Vamos conversar?
                </span>

                <h2>Sua marca tem uma história. Vamos apresentá-la ao mundo.</h2>

                <p>
                    Conheça nossas soluções e descubra como podemos
                    ajudar a construir uma presença digital mais
                    organizada, criativa e alinhada à identidade
                    do seu negócio.
                </p>

                <a href="index.php#servicos" class="btn">
                    Explorar serviços
                </a>
            </div>

        </div>
    </section>

</main>

<footer>
    <div class="container">
        <p>
            &copy; <?php echo date("Y"); ?>
            Social Blue. Todos os direitos reservados.
        </p>
    </div>
</footer>

</body>
</html>
