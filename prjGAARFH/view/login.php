<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/view/js/login.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Para funcionar o Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js" integrity="sha512-RTxmGPtGtFBja+6BCvELEfuUdzlPcgf5TZ7qOVRmDfI9fDdX2f1IwBq+ChiELfWt72WY34n0Ti1oo2Q3cWn+kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    
    <script type="text/javascript" src="js/ajax_formulario.js"></script>

    <title>Login - GAARFH  Shoes</title>
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
                <li><a href="inicio.html">Início</a></li>
                <li><a href="produtos.html">Produtos</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="carrinho.html">Carrinho</a></li>
            </ul>
        </nav>
    </header>

    <section class="form-section">
        <h2>Login</h2>
        <form id="loginForm" action="../view/testlogin.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="txtemail" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="txtsenha" required>
            
            <button type="submit">Entrar</button>
        </form>
        
    </section>

    <footer>
        <p>&copy; 2024 GAARFH  Shoes. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
