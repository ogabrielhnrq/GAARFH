<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - GAARFH  Shoes</title>
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

        .form-section {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 5px;
        }

        form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form button {
            padding: 10px 20px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        form button:hover {
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

    <section class="form-section">
        <h2>Registro de Tênis</h2>
        <form id="registroForm" action="../controller/tenisC.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="txtNome" required>
            
            <label for="preco">Preço:</label>
            <input type="preco" id="txtPreco" name="txtPreco" required>
            
            
            <button type="submit" name="btnRegistrar" id="btnRegistrar">Registrar</button>
            <br>
            <button type="submit" name="btnExcluir" id="btnExcluir">Excluir</button>
            <br>
            <button type="submit" name="btnAtualizar"id="btnAtualizar">Atualizar</button>
        
        </form>
    </section>

    <footer>
        <p>&copy; 2024 GAARFH  Shoes. Todos os direitos reservados.</p>
    </footer>

    <script src="registroT.js"></script>
</body>
</html>
