<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Aceites.css">
    <script src="../Styles/shopcart.js"></script>
    <title>MotoGearPro</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="../Media/LogoTienda3.1.png" alt="Logo">
            </a>
        </div>
        <div class="nav-items">
            <div class="top-nav">
            <div class="contacto">
                <a href="#">Contactenos</a>
            </div>
            <div class="shopcart">
                <a href="shopCart.php">
                    <img src="../Media/canasta de compra.png" alt="Carrito">
                    <span class="cart-counter">0</span>
                </a>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="search-box">
                <input type="text" placeholder="Buscar...">
                <button type="submit">Buscar</button>
            </div>
        </div>
    </div>
</div>
<div class="second-navbar">
    <ul>
        <li><a href="Cascos.php">Cascos</a></li>
        <li><a href="Accesorios.php">Accesorios</a></li>
        <li><a href="Intercomunicadores.php">Intercomunicadores</a></li>
        <li><a href="Aceites.php">Aceites</a></li>
        <li><a href="llantas.php">Llantas</a></li>
        <li><a href="maletas.php">Maletas</a></li>
        <li><a href="soportes.php">Soportes</a></li>
        <li><a href="exploradoras.php">Exploradoras</a></li>
        <li><a href="botas.php">Botas</a></li>
        <li><a href="ofertas.php">Ofertas</a></li>
    </ul>
</div>

<div class="product-catalog">
    <div class="product-row">
        <?php
        require_once '/xampp/htdocs/backend/Shopcart/Classes/Product.php';
        require_once '/xampp/htdocs/backend/Shopcart/Classes/ProdArray.php';

        $aux = new Products();

        $aux->addProduct(new Product("Aceite", 2100000, "../Media/img/0001.png", 10), 0);
        $aux->addProduct(new Product("Más aceite", 564000, "../Media/img/0002.png", 20), 1);
        $aux->addProduct(new Product("Otro aceite", 60000, "../Media/img/0003.png", 2), 2);
        $aux->addProduct(new Product("Ya ahora si el ultimo aceite", 2300000, "../Media/img/0004.png", 4), 3);

        $productos = $aux->getProducts();
        file_put_contents('cart.php', '<?php return ' . var_export($productos, true) . ';');
        foreach ($productos as $valor) {
            ?>
                <div class="product">
                <img src="<?php echo "{$valor->getImg()}"; ?>" alt="Producto 1">
                <div class="product-info">
                    <h3><?php echo "{$valor->getName()}"; ?></h3>
                    <p><?php echo "{$valor->getPrice()}"; ?></p>
                    <button class="add-to-cart" data-product-id="1">Agregar al carrito</button>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>
<footer class="footer">
    <div class="contact-info">
        <p>Teléfono de contacto: (123) 456-7890</p>
        <p>Correo de contacto: info@example.com</p>
    </div>
    <div class="social-media">
        <a href="#"><img src="../Media/facebook.png" alt="Facebook"></a>
        <a href="#"><img src="../Media/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="../Media/instagram.png" alt="Instagram"></a>
    </div>
</footer>
</body>
</html>