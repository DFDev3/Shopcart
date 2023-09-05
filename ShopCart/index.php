<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/index.css">
    <script src="../Styles/index.js"></script>
    <title>MotoGearPro</title>
</head>
<body>
    <div class="container" name="big-navbar">
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

            <li><a href="index.php?categoria=01">Cascos</a></li>
            <li><a href="index.php?categoria=02">Accesorios</a></li>
            <li><a href="index.php?categoria=03">Intercomunicadores</a></li>
            <li><a href="index.php?categoria=04">Aceites</a></li>
            <li><a href="index.php?categoria=05">Llantas</a></li>
            <li><a href="index.php?categoria=06">Maletas</a></li>
            <li><a href="index.php?categoria=07">Soportes</a></li>
            <li><a href="index.php?categoria=08">Exploradoras</a></li>
            <li><a href="index.php?categoria=09">Ropa</a></li>
            <li><a href="index.php?categoria=10">Ofertas</a></li>


        </ul>
    </div>
    </div>

    <div class="product-catalog">
        <div class="product-row">

        <?php

        require_once '../Classes/init.php';

        $finalArray = $aux->getProducts();
        $categoria = '04';
        echo "$categoria";
        
        foreach ($finalArray as $valor) {
            $prodCategory = $valor->getCategoria();

            if ($prodCategory == $categoria) {
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

            } else {
                if ($categoria == '00') {
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
            }
        }
        ?>
        
        </div>
    </div>
</div>
<footer class="footer">
    <div class="contact-info">
        <p>Teléfono de contacto: (123) 456-7890</p>
        <p>Correo de contacto: info@example.com</p>
    </div>
    <div class="social-media">
        <a href="#"><img src="../Media/facebook.png" alt="Facebook"></a>
        <a href="https://twitter.com/FateD_GG"><img src="../Media/twitter.png" alt="Twitter"></a>
        <a href="https://www.instagram.com/denis.fedi/"><img src="../Media/instagram.png" alt="Instagram"></a>
    </div>
</footer>

</body>

</html>
