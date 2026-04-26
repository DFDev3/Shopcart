<?php
session_start(); // Iniciar la sesion

$productos = [];

if (isset($_SESSION['carrito'])!=1) {
    $_SESSION['carrito']=[];
}else{
    $productos=$_SESSION['carrito'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar'])) {
    // Verificar si se ha enviado un formulario para eliminar un producto del carrito
    $producto_id = $_POST['product_id'];
    
    // Eliminar el producto del carrito por su indice
    
        
    
    unset($productos[$producto_id]);
    $productos=array_values($productos);
    // Reindexar el arreglo para evitar indices vacios
    $_SESSION['carrito'] = $productos;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/cart.css">
    <script src="../assets/cart.js"></script>
    <title>MotoGearPro</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="../assets/media/LogoTienda3.1.png" alt="Logo">
            </a>
        </div>
        <div class="nav-items">
            <div class="top-nav">
            <div class="contacto">
                <a href="#">Contactenos</a>
            </div>
            <div class="shopcart">
                <a href="cart.php">
                    <img src="../assets/media/canasta de compra.png" alt="Carrito">
                    <span class="cart-counter">0</span>
                </a>
            </div>
        </div>
        <div class="bottom-nav">
        <form class="search-box" action="search.php" method="get">
                    <input type="text" name="busca" placeholder="Buscar...">
                    <button type="submit" >Buscar</button>
                </form>
        </div>
    </div>
</div>

<div class="carritoCompra">
    <h2>Carrito de Compra</h2>
</div>
<div class="content">
    <div class="product-catalog">
        <div class="product-row">

        <?php             
        $total=0;
        $ids=array();
        
        if (!empty($_SESSION['carrito'])) {
            
            foreach ($productos as $key => $valor) {
                
                ?>
                <div class="product">
                    <img src="<?php echo $valor['urlImg']; ?>" alt="Producto">
                    <div class="product-info">
                        <h3><?php echo $valor['nombre']; ?></h3>
                        <p>$<?php echo number_format($valor['precio'], 2, ',', '.'); 
                        $total=$total+$valor['precio'];
                        array_push($ids,$valor['id'])?></p>
                        
                        <form action="cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $key; ?>">                       
                            <button class="add-to-cart"  type="submit" name="eliminar" >Eliminar</button>
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
        <h3>Total del Carrito: <?php echo number_format($total, 2, ',', '.')?></h3>
        <div>
        <a href="checkout.php?ids=<?php echo urlencode(implode(',', $ids)); ?>&total=<?php echo $total; ?>">
                <button class="Pagar" >Pagar</button>
            </a>
        </div>
        
    </div>
</div>
<footer class="footer">
    <div class="contact-info">
        <p>Telefono de contacto: (123) 456-7890</p>
        <p>Correo de contacto: info@example.com</p>
    </div>
    <div class="social-media">
        <a href="#"><img src="../assets/media/facebook.png" alt="Facebook"></a>
        <a href="https://twitter.com/FateD_GG"><img src="../assets/media/twitter.png" alt="Twitter"></a>
        <a href="https://www.instagram.com/denis.fedi/"><img src="../assets/media/instagram.png" alt="Instagram"></a>
    </div>
</footer>
</body>
</html>

