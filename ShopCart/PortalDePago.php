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
    <div class="container" >
        <div class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="../Media/LogoTienda3.1.png" alt="Logo">
                </a>
                
            </div>
            <div class="bottom-nav">
                
                <form class="search-box" action="busqueda.php" method="get">
                    <input type="text" name="busca" placeholder="Buscar...">
                    <button type="submit" >Buscar</button>
                </form>
                
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
            </div>
            
        </div>
    
        <div class="second-navbar">

            <form action="index.php" method="get">
            <ul>
                <li class="color-diferente"><a href="index.php">INICIO</a></li>
                <li><a href="index.php?categoria=01">Cascos</a></li>
                <li><a href="index.php?categoria=02">Accesorios</a></li>
                <li><a href="index.php?categoria=03">Intercomunicadores</a></li>
                <li><a href="index.php?categoria=04">Aceites</a></li>
                <li><a href="index.php?categoria=05">Llantas</a></li>
                <li><a href="index.php?categoria=06">Maletas</a></li>
                <li><a href="index.php?categoria=07">Soportes</a></li>
                <li><a href="index.php?categoria=08">Exploradoras</a></li>
                <li><a href="index.php?categoria=09">Ropa</a></li>



            </ul>
            </form>
        </div>
    </div>
<div class="cont">
    
<div class="product-catalog">
        <div class="product-row">
        
        

        <?php
        require '../Classes/init.php';

        $total=0;
        $ids = isset($_GET['ids']) ? explode(',', $_GET['ids']) : array();

        if (!empty($ids)){
            foreach ($ids as $producto_id) {
                # code...
                foreach ($productos as $prod) {
                    # code...
                    if($prod['id']==$producto_id){
                        ?>
                            <div class="product">
                            <img src="<?php echo $valor['urlImg']; ?>" alt="Producto">
                                <div class="product-info">
                                    <h3><?php echo $valor['nombre']; ?></h3>
                                    <p><?php echo number_format($valor['precio'], 2, ',', '.'); 
                                    $total=$total+$valor['precio'];
                                    array_push($ids,$valor['id'])?></p>
                                </div>
                            </div>
                        <?php
                    }
                }
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
 
    <div class="payment-form">
        <h2>Formulario de Pago</h2>
        <form action="procesar_pago.php" method="post" onsubmit="actualizarTotSend()">
            <div class="form-group">
                <label for="nombre_titular">Nombre del Titular:</label>
                <input type="text" id="nombre_titular" name="nombre_titular" required>
            </div>
            <div class="form-group">
                <label for="numero_tarjeta">Número de Tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" pattern="[0-9]{16}" required>
            </div>
            <div class="form-group">
                <label for="mes_expiracion">Mes de Expiración (mm):</label>
                <input type="text" id="mes_expiracion" name="mes_expiracion" pattern="(0[1-9]|1[0-2])" placeholder="mm" required inputmode="numeric" maxlength="2">
            </div>
            <div class="form-group">
                <label for="ano_expiracion">Año de Expiración (aa):</label>
                <input type="text" id="ano_expiracion" name="ano_expiracion" pattern="[0-9]{2}" placeholder="aa" required inputmode="numeric" maxlength="2">
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
                <input type="hidden" id='totsend' name="totsend" value=0>
            </div>

            <div class="form-group">
                <button type="submit" name="pagar">Pagar</button>
            </div>
        </form>
        <script>
            function actualizarTotSend() {
                // Calcula el nuevo valor de totenvio antes de enviar el formulario
                var totsend = total + 10000;
                // Actualiza el valor del input hidden
                document.getElementById("totsend").value = totsend;
                // No olvides devolver true para permitir que el formulario se envíe
                return true;
            }
        </script>
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
<script>
var subt = 0;
var iva = 0.19;
var valiva = 0;
var total = 0;
var totenvio = 0;
function actualizarSubtotal() {
    //CALCULOS NECESARIOS PARA EL SUBTOTAL
    subt=total-(total*iva);
    document.getElementById("subt").textContent = subt;
};
function actualizarIVA() {
    //CALCULOS NECESARIOS PARA EL SUBTOTAL
    valiva =total*iva;
    document.getElementById("iva").textContent = valiva;
};
function actualizarTotal(){
    //Aqui va el valor total de la suma de los productos
}
function actualizarTotEnvio(){
    //Se suma el total con el envío y esto es lo que se muestra
    totenvio=total+10000;
    document.getElementById("total").textContent = totenvio;

}


// Llama a la función para mostrar el subtotal inicial (0)
actualizarTotal();
actualizarIVA();
actualizarSubtotal();
actualizarTotEnvio();
actualizarTotSend();
</script>
</body>
</html>