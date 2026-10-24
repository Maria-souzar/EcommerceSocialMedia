<?php
include 'conexao.php';
$produtos = $conn->query("SELECT * FROM produtos");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - Carrinho</title>
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

        .main-content { 
            padding: 40px 20px; 
            max-width: 1000px; 
            margin: 0 auto; 
        }
        .carrinho-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        @media (max-width: 768px) {
             .carrinho-container {
                 grid-template-columns: 1fr; 
                } 
            }
        
        .grid-servicos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .card-item {
            background: #0033aa;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-item h3 { 
            font-size: 1.1rem; 
            margin-bottom: 8px; 
        }
        .card-item p {
             font-size: 1.2rem; 
             font-weight: bold; 
             color: #00aaff; 
             margin-bottom: 12px; 
            }
        .card-item button {
            background: #ffffff;
            color: #0033aa;
            border: none;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        .card-item button:hover { 
            background: #00aaff; 
            color: #fff; 
        }

        .checkout-box {
            background: #001f66;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        .checkout-box h3 { 
            margin-bottom: 15px; 
            font-size: 1.4rem; 
            border-bottom: 2px solid #0033aa; 
            padding-bottom: 8px; 
        }
        .lista-itens { 
            max-height: 150px; 
            overflow-y: auto; 
            margin-bottom: 15px; 
        }
        .item-carrinho { 
            display: flex; 
            justify-content: space-between; 
            padding: 6px 0; 
            font-size: 0.95rem; 
        }
        
        .pagamento-opcoes { 
            margin-top: 15px; 
        }
        .opcao-pagamento {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #002b99;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .btn-pagar {
            width: 100%;
            background: #00aaff;
            color: #fff;
            border: none;
            padding: 14px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }
        .btn-pagar:hover { 
            background: #0088cc; 
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

    <div class="main-content">
        <h2 style="text-align: center; margin-bottom: 30px;">CARRINHO & SERVIÇOS</h2>
        
        <div class="carrinho-container">
            <div>
                <h3 style="margin-bottom: 15px;">Escolha os Serviços:</h3>
                <div class="grid-servicos">
                    <?php while($prod = $produtos->fetch_assoc()): ?>
                        <div class="card-item">
                            <div>
                                <h3><?php echo $prod['nome']; ?></h3>
                                <p>R$ <?php echo number_format($prod['preco'], 2, ',', '.'); ?></p>
                            </div>
                            <button onclick="adicionarCarrinho('<?php echo $prod['nome']; ?>', <?php echo $prod['preco']; ?>)">Adicionar</button>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="checkout-box">
                <h3>Resumo do Pedido</h3>
                <div id="lista-carrinho" class="lista-itens">
                    <p style="color: #aaa;">Nenhum item selecionado.</p>
                </div>
                
                <hr style="border-color: #0033aa; margin: 10px 0;">
                
                <div style="display: flex; justify-content: space-between; font-size: 1.2rem; font-weight: bold; margin-bottom: 20px;">
                    <span>Total:</span>
                    <span id="valor-total" style="color: #00aaff;">R$ 0,00</span>
                </div>

                <h3>Forma de Pagamento</h3>
                <div class="pagamento-opcoes">
                    <label class="opcao-pagamento">
                        <input type="radio" name="pagamento" value="pix" checked>
                        <i class="fa-brands fa-pix" style="color: #00ffd5;"></i> Pix
                    </label>
                    <label class="opcao-pagamento">
                        <input type="radio" name="pagamento" value="cartao">
                        <i class="fa-regular fa-credit-card"></i> Cartão de Crédito
                    </label>
                    <label class="opcao-pagamento">
                        <input type="radio" name="pagamento" value="boleto">
                        <i class="fa-solid fa-barcode"></i> Boleto Bancário
                    </label>
                </div>

                <button class="btn-pagar" onclick="finalizarPagamento()">Finalizar Pagamento</button>
            </div>
        </div>
    </div>

    <script>
        let carrinho = [];

        function adicionarCarrinho(nome, preco) {
            carrinho.push({ nome, preco });
            atualizarCarrinho();
        }

        function atualizarCarrinho() {
            const listaElemento = document.getElementById('lista-carrinho');
            const totalElemento = document.getElementById('valor-total');
            
            if (carrinho.length === 0) {
                listaElemento.innerHTML = '<p style="color: #aaa;">Nenhum item selecionado.</p>';
                totalElemento.innerText = 'R$ 0,00';
                return;
            }

            listaElemento.innerHTML = '';
            let total = 0;

            carrinho.forEach((item) => {
                total += item.preco;
                listaElemento.innerHTML += `
                    <div class="item-carrinho">
                        <span>${item.nome}</span>
                        <span>R$ ${item.preco.toFixed(2).replace('.', ',')}</span>
                    </div>
                `;
            });

            totalElemento.innerText = `R$ ${total.toFixed(2).replace('.', ',')}`;
        }

        function finalizarPagamento() {
            if (carrinho.length === 0) {
                alert("Seu carrinho está vazio!");
                return;
            }
            alert("✅ Pagamento Aprovado com Sucesso!");
            carrinho = [];
            atualizarCarrinho();
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>