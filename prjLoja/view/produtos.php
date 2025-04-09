<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - GAARFH  Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Para funcionar o Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js" integrity="sha512-RTxmGPtGtFBja+6BCvELEfuUdzlPcgf5TZ7qOVRmDfI9fDdX2f1IwBq+ChiELfWt72WY34n0Ti1oo2Q3cWn+kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
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

        .section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .produto-list .produto-grid {
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

        .area_lista {
            position: relative;
            top: 250px;
            border-radius: 15px;
            overflow-y: scroll;
            overflow: hidden;
        }

        .linha_par {
            background-color: white;
        }
  
        .linha_impar{
            background-color: lightgrey;
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

    <section class="produto-list">
        <h2>Nossos Produtos</h2>
        <div class="produto-grid">
            <div class="produto">
                <img src="./img/jordanChicago.jpg" width="200" height="200"/>
                <h3>Jordan Chicago</h3>
                <p>R$ 199,99</p>
                <a href="carrinho.php" class="produto-btn">Comprar</a>
            </div>
            <div class="produto">
                <img src="./img/travisFrag.jpg" width="200" height="200"/>
                <h3>Travis Scott x Fragment</h3>
                <p>R$ 299,99</p>
                <a href="carrinho.php" class="produto-btn">Comprar</a>
            </div>
            <div class="produto">
                <img src="./img/yeezy500.jpg" width="200" height="200"/>
                <h3>Yeezy 500</h3>
                <p>R$ 399,99</p>
                <a href="carrinho.php" class="produto-btn">Comprar</a>
            </div>            
        </div>
    </section>

    <nav>   
        <div class="produto">
            <?php 
                require_once('../model/tenisDAO.php'); 
                $dao = new TenisDAO(new Tenis(null, null));
                $dao->lista();
            ?>
        </div>
    </nav>
</body>

<footer>
    <p>&copy; 2024 GAARFH  Shoes. Todos os direitos reservados.</p>
</footer>
</html>
