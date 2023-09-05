<?php

session_start();

require 'Product.php';
require 'ProdArray.php';
require 'Cart.php';


$productos = [
    ['id' => 1, 'nombre' => 'Eni Fork Oil 15w', 'precio' => 20000.0, 'urlImg' => '../Media/img/0001.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Eni'],
    ['id' => 2, 'nombre' => 'Eni mix 2T', 'precio' => 25000.0, 'urlImg' => '../Media/img/0002.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Eni'],
    ['id' => 3, 'nombre' => 'Mobil Super 10w-30', 'precio' => 39000.0, 'urlImg' => '../Media/img/0003.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Mobil'],
    ['id' => 4, 'nombre' => 'Mobil Super 20w-50', 'precio' => 48000.0, 'urlImg' => '../Media/img/0004.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Mobil'],
    ['id' => 5, 'nombre' => 'Motul 7100 10w-50', 'precio' => 40000.0, 'urlImg' => '../Media/img/0005.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Motul'],
    ['id' => 6, 'nombre' => 'Motul 5000 20w-50', 'precio' => 42000.0, 'urlImg' => '../Media/img/0006.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Motul'],
    ['id' => 7, 'nombre' => 'Yamalube 2T', 'precio' => 35000.0, 'urlImg' => '../Media/img/0007.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Yamalube'],
    ['id' => 8, 'nombre' => 'Yamalube 10w-40', 'precio' => 36000.0, 'urlImg' => '../Media/img/0008.png', 'categoria' => '04', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Yamalube'],
    ['id' => 9, 'nombre' => 'Soporte universal para maletero', 'precio' => 48900.0, 'urlImg' => '../Media/img/0009.png', 'categoria' => '07', 'distribuidor' => 'MotoPartes Express', 'marca' => 'keybok'],
    ['id' => 10, 'nombre' => 'Casco de color gris opaco', 'precio' => 400000.0, 'urlImg' => '../Media/img/0010.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Svr31'],
    ['id' => 11, 'nombre' => 'Casco de color gris metálico con visor multicolor', 'precio' => 450000.0, 'urlImg' => '../Media/img/0011.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Srv31'],
    ['id' => 12, 'nombre' => 'Casco color negro mate con visera intercambiable', 'precio' => 543000.0, 'urlImg' => '../Media/img/0012.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Svr31'],
    ['id' => 13, 'nombre' => 'Casco color negro mate con visera negra', 'precio' => 543002.0, 'urlImg' => '../Media/img/0013.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Svr31'],
    ['id' => 14, 'nombre' => 'Casco color negro mate con visera negra', 'precio' => 324000.0, 'urlImg' => '../Media/img/0014.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Generica'],
    ['id' => 15, 'nombre' => 'Casco blanco con detalles en azul', 'precio' => 643000.0, 'urlImg' => '../Media/img/0015.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Svr31'],
    ['id' => 16, 'nombre' => 'Casco gris metalizado con visera naranja', 'precio' => 622300.0, 'urlImg' => '../Media/img/0016.png', 'categoria' => '01', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Svr31'],
    ['id' => 17, 'nombre' => 'Guantes negro con diseño de panal', 'precio' => 23100.0, 'urlImg' => '../Media/img/0017.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Arlinx'],
    ['id' => 18, 'nombre' => 'Guantes negro con detalles blancos', 'precio' => 23100.0, 'urlImg' => '../Media/img/0018.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Arlinx'],
    ['id' => 19, 'nombre' => 'Impermeable de color azul rey y gris', 'precio' => 34000.0, 'urlImg' => '../Media/img/0019.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'TrinoV'],
    ['id' => 20, 'nombre' => 'Intercomunicador SS', 'precio' => 10000.0, 'urlImg' => '../Media/img/0020.png', 'categoria' => '03', 'distribuidor' => 'MotoPartes Express', 'marca' => 'SS'],
    ['id' => 21, 'nombre' => 'Maletero Plateado', 'precio' => 321000.0, 'urlImg' => '../Media/img/0021.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'prety'],
    ['id' => 22, 'nombre' => 'Cofre sencillo color negro', 'precio' => 213000.0, 'urlImg' => '../Media/img/0022.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Generico'],
    ['id' => 23, 'nombre' => 'Cofre sencillo con agarradera color negro', 'precio' => 243000.0, 'urlImg' => '../Media/img/0023.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Generico'],
    ['id' => 24, 'nombre' => 'Maletín Para viajar color gris', 'precio' => 52000.0, 'urlImg' => '../Media/img/0024.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'preparts'],
    ['id' => 25, 'nombre' => 'Maletín para viajar gris con negro', 'precio' => 89000.0, 'urlImg' => '../Media/img/0025.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'preparts'],
    ['id' => 26, 'nombre' => 'Maletín de viaje color caqui', 'precio' => 321000.0, 'urlImg' => '../Media/img/0026.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'preparts'],
    ['id' => 27, 'nombre' => 'Soporte para cofre de viaje', 'precio' => 213200.0, 'urlImg' => '../Media/img/0027.png', 'categoria' => '07', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Vatican'],
    ['id' => 28, 'nombre' => 'Protector color negro', 'precio' => 35000.0, 'urlImg' => '../Media/img/0028.png', 'categoria' => '27', 'distribuidor' => 'MotoPartes Express', 'marca' => 'skyfly'],
    ['id' => 29, 'nombre' => 'Soporte para Celular 1', 'precio' => 21000.0, 'urlImg' => '../Media/img/0029.png', 'categoria' => '07', 'distribuidor' => 'MotoPartes Express', 'marca' => 'CaseShop'],
    ['id' => 30, 'nombre' => 'Soporte para celular impermeable', 'precio' => 42000.0, 'urlImg' => '../Media/img/0030.png', 'categoria' => '07', 'distribuidor' => 'MotoPartes Express', 'marca' => 'CaseShop'],
    ['id' => 31, 'nombre' => 'Soporte para celular en aluminio', 'precio' => 27000.0, 'urlImg' => '../Media/img/0031.png', 'categoria' => '07', 'distribuidor' => 'MotoPartes Express', 'marca' => 'CadeShop'],
    ['id' => 32, 'nombre' => 'Kit de viaje largo', 'precio' => 1000000.0, 'urlImg' => '../Media/img/0032.png', 'categoria' => '06', 'distribuidor' => 'MotoPartes Express', 'marca' => 'yamaha'],
    ['id' => 33, 'nombre' => 'Candado Para Frenos color amarillo', 'precio' => 31000.0, 'urlImg' => '../Media/img/0033.png', 'categoria' => '02', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Seguritypop'],
    ['id' => 34, 'nombre' => 'Candado Para Frenos color amarillo reducido', 'precio' => 28000.0, 'urlImg' => '../Media/img/0034.png', 'categoria' => '02', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Keypal'],
    ['id' => 35, 'nombre' => 'Luces Exploradoras regulables', 'precio' => 55000.0, 'urlImg' => '../Media/img/0035.png', 'categoria' => '08', 'distribuidor' => 'MotoPartes Express', 'marca' => 'SunDoble'],
    ['id' => 36, 'nombre' => 'Luz exploradora para defensa', 'precio' => 64000.0, 'urlImg' => '../Media/img/0036.png', 'categoria' => '08', 'distribuidor' => 'MotoPartes Express', 'marca' => 'lapmtic'],
    ['id' => 37, 'nombre' => 'Chaqueta para viajes', 'precio' => 321000.0, 'urlImg' => '../Media/img/0037.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Richa'],
    ['id' => 38, 'nombre' => 'Chaqueta para viajes con banda de luces reflectantes', 'precio' => 365000.0, 'urlImg' => '../Media/img/0038.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Rott+cot'],
    ['id' => 39, 'nombre' => 'Chaqueta para viajes con refuerzo en codos y espalda', 'precio' => 524000.0, 'urlImg' => '../Media/img/0039.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Chanel'],
    ['id' => 40, 'nombre' => 'Pantalones de viaje con protección en rodillas', 'precio' => 645000.0, 'urlImg' => '../Media/img/0040.png', 'categoria' => '09', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Chanel'],
    ['id' => 41, 'nombre' => 'Llanta 125/32/02 para motos 125 a 150', 'precio' => 2500000.0, 'urlImg' => '../Media/img/0041.png', 'categoria' => '05', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Michelin'],
    ['id' => 42, 'nombre' => 'Llanta 213/32/20 para 300 cc en adelante', 'precio' => 450000.0, 'urlImg' => '../Media/img/0042.png', 'categoria' => '05', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Michellin'],
    ['id' => 43, 'nombre' => 'Llanta 243/13/09 para 350 cc en adelante', 'precio' => 600000.0, 'urlImg' => '../Media/img/0043.png', 'categoria' => '05', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Michellin'],
    ['id' => 44, 'nombre' => 'Llanta 214/23/04 para 250 cc en adelante', 'precio' => 700000.0, 'urlImg' => '../Media/img/0044.png', 'categoria' => '05', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Michellin'],
    ['id' => 45, 'nombre' => 'Llanta 291/42/05 para 1000 cc en adelante', 'precio' => 800000.0, 'urlImg' => '../Media/img/0045.png', 'categoria' => '05', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Michellin'],
    ['id' => 47, 'nombre' => 'Patito Acompañante', 'precio' => 28000.0, 'urlImg' => '../Media/img/0047.png', 'categoria' => '10', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Ball8'],
    ['id' => 48, 'nombre' => 'Doraemon Acompañante', 'precio' => 29000.0, 'urlImg' => '../Media/img/0048.png', 'categoria' => '10', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Ball8'],
    ['id' => 49, 'nombre' => 'Forro para Casco', 'precio' => 34000.0, 'urlImg' => '../Media/img/0049.png', 'categoria' => '10', 'distribuidor' => 'MotoPartes Express', 'marca' => 'XiaXia'],
    ['id' => 50, 'nombre' => 'Cubierta para motor', 'precio' => 40500.0, 'urlImg' => '../Media/img/0050.png', 'categoria' => '10', 'distribuidor' => 'MotoPartes Express', 'marca' => 'Taurus']
];

//final

if (!isset($carrito)) {
    $carrito = new Cart();
    $_SESSION['CarritoSesion'] = $carrito; // Initialize the shopping cart only once.
}


?>
