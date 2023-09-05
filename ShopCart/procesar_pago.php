<?php
if (isset($_POST['pagar'])) {
    $totsend = $_POST['totsend'];
    $nombre_titular = $_POST['nombre_titular'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $ccv = $_POST['ccv'];
    $numero_cuotas = $_POST['numero_cuotas'];
    $mes_expiracion = $_POST['mes_expiracion'];
    $año_expiracion = $_POST['ano_expiracion'];

    // Realiza las validaciones necesarias aquí
    if (empty($nombre_titular) || empty($numero_tarjeta) || empty($ccv) || empty($numero_cuotas)) {
        echo "Error: Datos incorrectos. Todos los campos son obligatorios.";
    } else if($año_expiracion < 24){
        echo "Error: Su tarjeta ya expiró";
    }else {
        // Procesar el pago aquí (simulación)
        echo "Pago completado";
        echo $totsend;
    }
}
?>