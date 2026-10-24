<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - Cadastro</title>
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

        .form-container { 
            padding: 40px 20px; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: calc(100vh - 75px); 
        }
        .form-box {
            background: #002b99;
            max-width: 420px;
            width: 100%;
            padding: 35px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        }
        .form-box h2 { 
            margin-bottom: 25px; 
            letter-spacing: 1px; 
        }
        .form-box input {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: #ffffff;
            color: #333;
            font-size: 1rem;
        }
        .form-box button {
            width: 100%;
            padding: 14px;
            background: #001a66;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }
        .form-box button:hover { 
            background: #000d33; 
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

    <div class="form-container">
        <div class="form-box">
            <i class="fa-regular fa-id-card" style="font-size: 4rem; margin-bottom: 15px;"></i>
            <h2>CADASTRAR</h2>
            <form action="cadastrar.php" method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>

</body>
</html>