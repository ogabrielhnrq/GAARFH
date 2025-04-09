<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAARFH  Shoes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #0000001e;
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

        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero-text h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero-text p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .cta {
            padding: 10px 20px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .featured-produtos {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .featured-produtos h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .produto-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .produto {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            flex: 1 1 30%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .produto img {
            max-width: 100%;
            height: auto;
        }

        .produto h3 {
            margin: 10px 0;
        }

        .produto p {
            font-size: 18px;
            color: #333;
        }

        .produto .produto-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
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
                <li> 
                    <?php 
                        session_start();
                        echo "<h5>Bem vindo: " . $_SESSION['usuario'] . "</h5>"; 
                ?>
                </li>
            <ul>
                <li><a href="../view/home.php">Início</a></li>
                <li><a href="../view/produtos.php">Tênis</a></li>
                <li><a href="../view/login.php">Login</a></li>
                <li><a href="../view/registroC.php">Cadastro</a></li>
                <li><a href="../view/registroT.php">Registro de Tênis</a></li>
                <li><a href="../view/carrinho.php">Carrinho</a></li>
            </ul>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Bem-vindo à nossa Loja</h1>
            <p>Os melhores tênis para você</p>
            <a href="../view/produtos.php" class="cta">Comprar Agora</a>
        </div>
    </section>

    <section class="featured-produtos">
        <h2>Produtos em Destaque</h2>
        <div class="produto-grid">
            <div class="produto">
                <img src="./img/jordanChicago.jpg" width="200" height="200"/>
                <h3>Jordan Chicago</h3>
                <p>R$ 199,99</p>
                <a href="carrinho.html" class="produto-btn">Comprar</a>
            </div>
            <div class="produto">
                <img src="./img/travisFrag.jpg" width="200" height="200"/>
                <h3>Travis Scott x Fragment</h3>
                <p>R$ 299,99</p>
                <a href="carrinho.html" class="produto-btn">Comprar</a>
            </div>
            <div class="produto">
                <img src="./img/yeezy500.jpg" width="200" height="200"/>
                <h3>Yeezy 500</h3>
                <p>R$ 399,99</p>
                <a href="carrinho.html" class="produto-btn">Comprar</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 GAARFH  Shoes. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
