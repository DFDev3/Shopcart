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
            <a href="index.html">
                <img src="../Media/LogoTienda3.1.png" alt="Logo">
            </a>
        </div>
        <div class="nav-items">
            <div class="top-nav">
            <div class="contacto">
                <a href="#">Contactenos</a>
            </div>
            <div class="shopcart">
                <a href="shopCart.html">
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
        <li><a href="Cascos.html">Cascos</a></li>
        <li><a href="Accesorios.html">Accesorios</a></li>
        <li><a href="Intercomunicadores.html">Intercomunicadores</a></li>
        <li><a href="Aceites.html">Aceites</a></li>
        <li><a href="llantas.html">Llantas</a></li>
        <li><a href="maletas.html">Maletas</a></li>
        <li><a href="soportes.html">Soportes</a></li>
        <li><a href="exploradoras.html">Exploradoras</a></li>
        <li><a href="botas.html">Botas</a></li>
        <li><a href="ofertas.html">Ofertas</a></li>
    </ul>
</div>
<div class="carritoCompra">
    <h2>Carrito de Compra</h2>
</div>
    <!-- Vista del carrito de compra -->
    <div class="cart">

        
        <!-- Repite estos elementos para cada artículo en el carrito -->
        <div class="cart-item">
            <img src="../Media/cascoprueba.jpg" alt="Producto 1">
            <div class="item-details">
                <h3>Producto 1</h3>
                <p>Descripción del Producto 1.</p>
            </div>
            <div class="item-price">
                <p>Precio: $10.00</p>
            </div>
            <div class="item-actions">
                <button class="remove-button">Eliminar</button>
            </div>
        </div>
        
        <div class="cart-item">
            <img src="../Media/cascoprueba.jpg" alt="Producto 2">
            <div class="item-details">
                <h3>Producto 2</h3>
                <p>Descripción del Producto 2.</p>
            </div>
            <div class="item-price">
                <p>Precio: $15.00</p>
            </div>
            <div class="item-actions">
                <button class="remove-button">Eliminar</button>
            </div>
        </div>
    </div>
<div class="cart">
    <div class="total">
        <h3>Total del Carrito: $25.00</h3>
        <a href="PortalDePago.html">
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
        <a href="#"><img src="../Media/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="../Media/instagram.png" alt="Instagram"></a>
    </div>
</footer>
</body>
</html>