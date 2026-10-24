<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - Sobre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
        body { 
            background-color: #050b1e; 
            color: #fff; 
            min-height: 100vh; 
        }

        header {
            background-color: #001a66;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 50px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }
        .nav-links { 
            display: flex; 
            gap: 30px; 
        }
        .nav-links a { 
            color: #fff; 
            text-decoration: none; 
            font-weight: 700; 
            letter-spacing: 1px; 
        }
        .nav-links a:hover { 
            color: #00aaff; 
        }
        .user-actions { 
            display: flex; 
            gap: 20px; 
            font-size: 22px; 
        }
        .user-actions a { 
            color: #fff; 
            text-decoration: none; 
        }
        .user-actions a:hover { 
            color: #00aaff; 
        }

        .sobre-container { 
            padding: 50px 20px; 
            max-width: 1000px; 
            margin: 0 auto; 
        }
        
        .sobre-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .sobre-header h2 {
            font-size: 2.5rem;
            letter-spacing: 2px;
            color: #ffffff;
            margin-bottom: 10px;
        }
        .sobre-header p {
            color: #d0e1ff;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .grid-sobre {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card-sobre {
            background: #002b99;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        .card-sobre:hover {
            transform: translateY(-5px);
            background: #0033aa;
        }
        .card-sobre i {
            font-size: 2.5rem;
            color: #feffff;
            margin-bottom: 15px;
        }
        .card-sobre h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #fff;
        }
        .card-sobre p {
            font-size: 0.95rem;
            color: #d0d0d0;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-links">
            <a href="index.php">INÍCIO</a>
            <a href="sobre.php">SOBRE</a>
        </div>
        <div class="user-actions">
            <a href="login.php" title="Entrar"><i class="fa-regular fa-user"></i></a>
            <a href="carrinho.php" title="Carrinho"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </header>

    <div class="sobre-container">
        <div class="sobre-header">
            <h2>O QUE FAZ UM SOCIAL MEDIA?</h2>
            <p>Transformamos a presença digital do seu negócio com posicionamento estratégico, aumentando o engajamento e convertendo seguidores em clientes.</p>
        </div>

        <div class="grid-sobre">
            <div class="card-sobre">
                <i class="fa-solid fa-chess"></i>
                <h3>Planejamento Estratégico</h3>
                <p>Análise de público-alvo, concorrência e definição de metas reais para acelerar o crescimento da sua marca.</p>
            </div>

            <div class="card-sobre">
                <i class="fa-solid fa-pen-nib"></i>
                <h3>Criação de Conteúdo</h3>
                <p>Produção de artes visuais atraentes, carrosséis educativos e vídeos dinâmicos adaptados para cada rede social.</p>
            </div>

            <div class="card-sobre">
                <i class="fa-solid fa-align-left"></i>
                <h3>Legendas Persuasivas</h3>
                <p>Escrita criativa usando técnicas de Copywriting para prender a atenção e gerar ações dos seus seguidores.</p>
            </div>

            <div class="card-sobre">
                <i class="fa-regular fa-calendar-days"></i>
                <h3>Calendário Mensal</h3>
                <p>Organização prévia e cronograma estratégico de postagens para manter a constância e frequência ideais.</p>
            </div>

            <div class="card-sobre">
                <i class="fa-solid fa-chart-line"></i>
                <h3>Análise de Métricas</h3>
                <p>Relatórios detalhados do desempenho dos posts para otimizar continuamente os resultados das suas campanhas.</p>
            </div>

            <div class="card-sobre">
                <i class="fa-regular fa-comments"></i>
                <h3>Gestão de Comunidade</h3>
                <p>Interação constante nos comentários e directs para aproximar o público e humanizar sua marca.</p>
            </div>
        </div>
    </div>

</body>
</html>