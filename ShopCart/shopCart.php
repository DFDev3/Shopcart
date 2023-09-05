<?php
session_start(); // Iniciar la sesión

if (isset($_SESSION['carrito'])!=1) {
    $_SESSION['carrito']=[];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar'])) {
    // Verificar si se ha enviado un formulario para eliminar un producto del carrito
    $producto_id = $_POST['producto_id'];
    
    // Eliminar el producto del carrito por su índice
    unset($_SESSION['carrito'][$producto_id]);
    
    // Reindexar el arreglo para evitar índices vacíos
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/shopcart.css">
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
<div class="carritoCompra">
    <h2>Carrito de Compra</h2>
</div>
<div class="content">
<div class="product-catalog">
        <div class="product-row">

        <?php             

        if (!empty($_SESSION['carrito'])) {
            
            foreach ($_SESSION['carrito'] as $key => $valor) {
                
                ?>
                <div class="product">
                <img src="<?php echo $valor['urlImg']; ?>" alt="Producto">
                    <div class="product-info">
                        <h3><?php echo $valor['nombre']; ?></h3>
                        <p>$<?php echo number_format($valor['precio'], 2, ',', '.'); ?></p>
                        <form method="post">
                            <input type="hidden" name="product_id" value=""<?php echo $key; ?>>                       
                            <button class="add-to-cart" data-product-id="1" type="submit" name="eliminar" >Eliminar</button>
                        </form>
                    </div>
                </div>
                <?php
            }
        }else{
            ?>
                <div class="content"></div>
                <h1 >El carrito esta vacio</h1>
            <?php
        }
              
        ?>
        
        </div>
    </div>
</div>
<div class="cart">
    <div class="total">
        <h3>Total del Carrito: $25.00</h3>
        <a href="PortalDePago.php">
            <button class="Pagar" >Pagar</button>
        </a>
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