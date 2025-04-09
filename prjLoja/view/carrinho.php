<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - GAARFH  Shoes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background: #000;
            color: #fff;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
        }

        .cart-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #f8f8f8;
        }

        .cart-total {
            text-align: right;
            margin-bottom: 20px;
        }

        .checkout-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .checkout-btn:hover {
            background: #333;
        }

        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">GAARFH  Shoes</div>
            <ul>
                <li><a href="../view/home.php">Início</a></li>
                <li><a href="../view/produtos.php">Tênis</a></li>
                <li><a href="../view/login.php">Login</a></li>
                <li><a href="../view/registroC.php">Cadastro</a></li>
                <li><a href="../view/registroT.php">Registro de Tênis</a></li>
                <li><a href="../view/carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>

    <section class="cart-section">
        <h2>Seu Carrinho</h2>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                
                
            </tbody>
        </table>
        <div class="cart-total">
            <p>Total: R$ <span id="totalPrice">0.00</span></p>
            <!-- colocar alerta de compra realizada -->   
            <a href="checkout.html" class="checkout-btn">Finalizar Compra</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 GAARFH  Shoes. Todos os direitos reservados.</p>
    </footer>
    <script src="./js/carrinho.js"></script>
</body>
</html>
