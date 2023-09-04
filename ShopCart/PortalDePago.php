<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/PortalDePago.css">
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
<div class="cont">
<div class="product-catalog">
    <div class="product-row">
        <div class="product">
            <img src="../Media/img/0021.png" alt="Producto 1">
            <div class="product-info">
                <h3>Producto 1</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>
        <div class="product">
            <img src="../Media/img/0022.png" alt="Producto 2">
            <div class="product-info">
                <h3>Producto 2</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>
        <div class="product">
            <img src="../Media/img/0023.png" alt="Producto 3">
            <div class="product-info">
                <h3>Producto 3</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>
        <div class="product">
            <img src="../Media/img/0024.png" alt="Producto 4">
            <div class="product-info">
                <h3>Producto 4</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>

    </div>
    <div class="product-row">
        <div class="product">
            <img src="../Media/img/0025.png" alt="Producto 5">
            <div class="product-info">
                <h3>Producto 5</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>
        <div class="product">
            <img src="../Media/img/0026.png" alt="Producto 6">
            <div class="product-info">
                <h3>Producto 6</h3>
                <p>Descripción del producto</p>
                
            </div>
        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
    </div>
    <div  class="product-row">
        <h1>Subtotal: </h1><br>
    </div>
    <div class="product-row">        
        <h4>Gastos de envio:</h4>
    </div>
    <div class="product-row">      
        <h4>Impuestos IVA: </h4>
    </div>
    <div class="product-row">        
        <h2> Total:</h2>
    </div>
</div>
 
    <div class="payment-form">
        <h2>Formulario de Pago</h2>
        <form action="procesar_pago.php" method="post">
            <div class="form-group">
                <label for="nombre_titular">Nombre del Titular:</label>
                <input type="text" id="nombre_titular" name="nombre_titular" required>
            </div>
            <div class="form-group">
                <label for="numero_tarjeta">Número de Tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" pattern="[0-9]{16}" required>
            </div>
            <div class="form-group">
                <label for="ccv">CCV:</label>
                <input type="text" id="ccv" name="ccv" pattern="[0-9]{3}" required>
            </div>
            <div class="form-group">
                <label for="numero_cuotas">Número de Cuotas:</label>
                <select id="numero_cuotas" name="numero_cuotas">
                    <?php
                    for ($i = 1; $i <= 36; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="pagar">Pagar</button>
            </div>
        </form>
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