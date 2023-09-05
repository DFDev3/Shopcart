<?php

require '../Classes/init.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addButton'])) {


        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];
        $productImg = $_POST['product_img'];
        $productCat = $_POST['product_cat'];
        $productDis = $_POST['product_dis'];
        $productBrand = $_POST['product_brand'];

        echo "Added $productName to the cart!";

        // $productToAdd = new Product($productName,$productPrice,$productImg,$productCat,$productDis,$productBrand);
        $remoteCount = $remote->countProducts();
        $remote->addProduct(new Product($productName,$productPrice,$productImg,$productCat,$productDis,$productBrand),$remoteCount+1);

    }
}
?>


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

        <form action="index.php" method="get">
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
        </form>
    </div>
    </div>
    <div class="content">
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

        $categoria = $_GET['categoria'];
        

        
        foreach ($finalArray as $valor) {
            $prodCategory = $valor->getCategoria();
            if ($prodCategory == $categoria) {
                ?>
                <div class="product">
                <img src="<?php echo "{$valor->getImg()}"; ?>" alt="Producto">
                    <div class="product-info">
                        <h3><?php echo "{$valor->getName()}"; ?></h3>
                        <p><?php echo "{$valor->getPrice()}"; ?></p>
                        <form method="post" action="process.php">
                            <input type="hidden" name="product_name" value="<?php echo "{$valor->getName()}"; ?>">
                            <input type="hidden" name="product_price" value="<?php echo "{$valor->getPrice()}"; ?>">
                            <input type="hidden" name="product_img" value="<?php echo "{$valor->getImg()}"; ?>">
                            <input type="hidden" name="product_cat" value="<?php echo "{$valor->getCategoria()}"; ?>">
                            <input type="hidden" name="product_dis" value="<?php echo "{$valor->getDistribuidor()}"; ?>">
                            <input type="hidden" name="product_brand" value="<?php echo "{$valor->getMarca()}"; ?>">                        
                            <button class="add-to-cart" data-product-id="1" type="submit" name="addButton">Add</button>
                        </form>
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
