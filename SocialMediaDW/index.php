<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - Início</title>
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
            cursor: pointer; 
            transition: color 0.3s ease;
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

        #inicio {
            background-color: #050b1e;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px;
            min-height: calc(100vh - 75px);
        }
        #inicio h1 {
             font-size: 3.5rem; 
             margin-bottom: 20px; 
             font-weight: 900; 
             letter-spacing: 3px; 
             text-transform: uppercase; 
             color: #fff; 
            }
        #inicio p { 
            font-size: 1.25rem; 
            max-width: 650px; 
            color: #d0e1ff; 
            line-height: 1.6; 
            margin-bottom: 30px; 
        }
        
        .btn-carrinho {
            background-color: #0033aa;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 1rem;
            letter-spacing: 1px;
            margin-bottom: 35px;
            display: inline-block;
            transition: background 0.3s ease;
        }
        .btn-carrinho:hover {
            background-color: #002288;
        }

        .social-icons-hero {
            display: flex;
            gap: 35px;
            font-size: 2.8rem;
        }
        .social-icons-hero i {
            color: rgba(255, 255, 255, 0.9);
            transition: transform 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }
        .social-icons-hero i:hover {
            transform: translateY(-8px) scale(1.1);
            color: #00aaff;
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

    <section id="inicio">
        <h1>SOCIAL MEDIA</h1>
        <p>gestão de redes sociais com posicionamento estratégico, criatividade e autenticidade.</p>
        
        <a href="carrinho.php" class="btn-carrinho">VER SERVIÇOS</a>

        <div class="social-icons-hero">
            <i class="fa-brands fa-instagram" title="Instagram"></i>
            <i class="fa-brands fa-tiktok" title="TikTok"></i>
            <i class="fa-brands fa-facebook" title="Facebook"></i>
        </div>
    </section>

</body>
</html>