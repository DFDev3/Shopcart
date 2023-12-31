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
    
 
    <div class="ad-container">
        <div class="ad-slideshow">
            <img src="../Media/SHPRO-630-C-WALLPAPER_Mesa-de-trabajo-1-1-scaled.jpg alt="Anuncio 1">
            <img src="../Media/intercom.png" alt="Anuncio 2">
            <img src="../Media/llantas.png" alt="Anuncio 3">
            <img src="../Media/yamalube1.jpg" alt="Anuncio 4">
        </div>
    </div>

    <div class="product-catalog">
        <div class="product-row">

        <?php

        require_once '../Classes/init.php';

        $finalArray = $aux->getProducts();
        $categoria = '01';
        echo "$categoria";
        
        foreach ($finalArray as $valor) {
            $prodCategory = $valor->ggietCategoria();

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
