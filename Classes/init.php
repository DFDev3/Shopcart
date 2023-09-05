<?php

session_start();

require 'Product.php';
require 'ProdArray.php';
require 'Cart.php';


$aux = new Products();
//$aux->addProduct(new Product("(Nombre)", (precio), "../Media/img/(ID de imagen)", '(categoria)', '(Distribuidor)', '(Marca)'), 0);
$aux->addProduct(new Product(1, "Eni Fork Oil 15w", 20000.0, "../Media/img/0001.png", '04', 'MotoPartes Express', 'Eni'), 0);
$aux->addProduct(new Product(2, "Eni mix 2T", 25000.0, "../Media/img/0002.png", '04', 'MotoPartes Express', 'Eni'), 1);
$aux->addProduct(new Product(3, "Mobil Super 10w-30", 39000.0, "../Media/img/0003.png", '04', 'MotoPartes Express', 'Mobil'), 2);
$aux->addProduct(new Product(4, "Mobil Super 20w-50", 48000.0, "../Media/img/0004.png", '04', 'MotoPartes Express', 'Mobil'), 3);
$aux->addProduct(new Product(5, "Motul 7100 10w-50", 40000.0, "../Media/img/0005.png", '04', 'MotoPartes Express', 'Motul'), 4);
$aux->addProduct(new Product(6, "Motul 5000 20w-50", 42000.0, "../Media/img/0006.png", '04', 'MotoPartes Express', 'Motul'), 5);
$aux->addProduct(new Product(7, "Yamalube 2T", 35000.0, "../Media/img/0007.png", '04', 'MotoPartes Express', 'Yamalube'), 6);
$aux->addProduct(new Product(8, "Yamalube 10w-40", 36000.0, "../Media/img/0008.png", '04', 'MotoPartes Express', 'Yamalube'), 7);
$aux->addProduct(new Product(9, "Soporte universal para maletero", 48900.0, "../Media/img/0009.png", '07', 'MotoPartes Express', 'keybok'), 8);
$aux->addProduct(new Product(10, "Casco de color gris opaco", 400000.0, "../Media/img/0010.png", '01', 'MotoPartes Express', 'Svr31'), 9);
$aux->addProduct(new Product(11, "Casco de color gris metálico con visor multicolor", 450000.0, "../Media/img/0011.png", '01', 'MotoPartes Express', 'Srv31'), 10);
$aux->addProduct(new Product(12, "Casco color negro mate con visera intercambiable", 543000.0, "../Media/img/0012.png", '01', 'MotoPartes Express', 'Svr31'), 11);
$aux->addProduct(new Product(13, "Casco color negro mate con visera negra", 543002.0, "../Media/img/0013.png", '01', 'MotoPartes Express', 'Svr31'), 12);
$aux->addProduct(new Product(14, "Casco color negro mate con visera negra", 324000.0, "../Media/img/0014.png", '01', 'MotoPartes Express', 'Generica'), 13);
$aux->addProduct(new Product(15, "Casco blanco con detalles en azul", 643000.0, "../Media/img/0015.png", '01', 'MotoPartes Express', 'Svr31'), 14);
$aux->addProduct(new Product(16, "Casco gris metalizado con visera naranja", 622300.0, "../Media/img/0016.png", '01', 'MotoPartes Express', 'Svr31'), 15);
$aux->addProduct(new Product(17, "Guantes negro con diseño de panal", 23100.0, "../Media/img/0017.png", '09', 'MotoPartes Express', 'Arlinx'), 16);
$aux->addProduct(new Product(18, "Guantes negro con detalles blancos", 23100.0, "../Media/img/0018.png", '09', 'MotoPartes Express', 'Arlinx'), 17);
$aux->addProduct(new Product(19, "Impermeable de color azul rey y gris", 34000.0, "../Media/img/0019.png", '09', 'MotoPartes Express', 'TrinoV'), 18);
$aux->addProduct(new Product(20, "Intercomunicador SS", 10000.0, "../Media/img/0020.png", '03', 'MotoPartes Express', 'SS'), 19);
$aux->addProduct(new Product(21, "Maletero Plateado", 321000.0, "../Media/img/0021.png", '06', 'MotoPartes Express', 'prety'), 20);
$aux->addProduct(new Product(22, "Cofre sencillo color negro", 213000.0, "../Media/img/0022.png", '06', 'MotoPartes Express', 'Generico'), 21);
$aux->addProduct(new Product(23, "Cofre sencillo con agarradera color negro", 243000.0, "../Media/img/0023.png", '06', 'MotoPartes Express', 'Generico'), 22);
$aux->addProduct(new Product(24, "Maletín Para viajar color gris", 52000.0, "../Media/img/0024.png", '06', 'MotoPartes Express', 'preparts'), 23);
$aux->addProduct(new Product(25, "Maletín para viajar gris con negro", 89000.0, "../Media/img/0025.png", '06', 'MotoPartes Express', 'preparts'), 24);
$aux->addProduct(new Product(26, "Maletín de viaje color caqui", 321000.0, "../Media/img/0026.png", '06', 'MotoPartes Express', 'preparts'), 25);
$aux->addProduct(new Product(27, "Soporte para cofre de viaje", 213200.0, "../Media/img/0027.png", '07', 'MotoPartes Express', 'Vatican'), 26);
$aux->addProduct(new Product(28, "Protector color negro", 35000.0, "../Media/img/0028.png", '27', 'MotoPartes Express', 'skyfly'), 27);
$aux->addProduct(new Product(29, "Soporte para Celular 1", 21000.0, "../Media/img/0029.png", '07', 'MotoPartes Express', 'CaseShop'), 28);
$aux->addProduct(new Product(30, "Soporte para celular impermeable", 42000.0, "../Media/img/0030.png", '07', 'MotoPartes Express', 'CaseShop'), 29);
$aux->addProduct(new Product(31, "Soporte para celular en aluminio", 27000.0, "../Media/img/0031.png", '07', 'MotoPartes Express', 'CadeShop'), 30);
$aux->addProduct(new Product(32, "Kit de viaje largo", 1000000.0, "../Media/img/0032.png", '06', 'MotoPartes Express', 'yamaha'), 31);
$aux->addProduct(new Product(33, "Candado Para Frenos color amarillo", 31000.0, "../Media/img/0033.png", '02', 'MotoPartes Express', 'Seguritypop'), 32);
$aux->addProduct(new Product(34, "Candado Para Frenos color amarillo reducido", 28000.0, "../Media/img/0034.png", '02', 'MotoPartes Express', 'Keypal'), 33);
$aux->addProduct(new Product(35, "Luces Exploradoras regulables", 55000.0, "../Media/img/0035.png", '08', 'MotoPartes Express', 'SunDoble'), 34);
$aux->addProduct(new Product(36, "Luz exploradora para defensa", 64000.0, "../Media/img/0036.png", '08', 'MotoPartes Express', 'lapmtic'), 35);
$aux->addProduct(new Product(37, "Chaqueta para viajes", 321000.0, "../Media/img/0037.png", '09', 'MotoPartes Express', 'Richa'), 36);
$aux->addProduct(new Product(38, "Chaqueta para viajes con banda de luces reflectantes", 365000.0, "../Media/img/0038.png", '09', 'MotoPartes Express', 'Rott+cot'), 37);
$aux->addProduct(new Product(39, "Chaqueta para viajes con refuerzo en codos y espalda", 524000.0, "../Media/img/0039.png", '09', 'MotoPartes Express', 'Chanel'), 38);
$aux->addProduct(new Product(40, "Pantalones de viaje con protección en rodillas", 645000.0, "../Media/img/0040.png", '09', 'MotoPartes Express', 'Chanel'), 39);
$aux->addProduct(new Product(41, "Llanta 125/32/02 para motos 125 a 150", 2500000.0, "../Media/img/0041.png", '05', 'MotoPartes Express', 'Michelin'), 40);
$aux->addProduct(new Product(42, "Llanta 213/32/20 para 300 cc en adelante", 450000.0, "../Media/img/0042.png", '05', 'MotoPartes Express', 'Michellin'), 41);
$aux->addProduct(new Product(43, "Llanta 243/13/09 para 350 cc en adelante", 600000.0, "../Media/img/0043.png", '05', 'MotoPartes Express', 'Michellin'), 42);
$aux->addProduct(new Product(44, "Llanta 214/23/04 para 250 cc en adelante", 700000.0, "../Media/img/0044.png", '05', 'MotoPartes Express', 'Michellin'), 43);
$aux->addProduct(new Product(45, "Llanta 291/42/05 para 1000 cc en adelante", 800000.0, "../Media/img/0045.png", '05', 'MotoPartes Express', 'Michellin'), 44);
$aux->addProduct(new Product(47, "Patito Acompañante", 28000.0, "../Media/img/0047.png", '10', 'MotoPartes Express', 'Ball8'), 45);
$aux->addProduct(new Product(48, "Doraemon Acompañante", 29000.0, "../Media/img/0048.png", '10', 'MotoPartes Express', 'Ball8'), 46);
$aux->addProduct(new Product(49, "Forro para Casco", 34000.0, "../Media/img/0049.png", '10', 'MotoPartes Express', 'XiaXia'), 47);
$aux->addProduct(new Product(50, "Cubierta para motor", 40500.0, "../Media/img/0050.png", '10', 'MotoPartes Express', 'Taurus'), 48);
//hola 1

$productos = $aux->getProducts();
file_put_contents('cart.php', '<?php return ' . var_export($productos, true) . ';');

//final

if (!isset($carrito)) {
    $carrito = new Cart();
    $_SESSION['CarritoSesion'] = $carrito; // Initialize the shopping cart only once.
}


?>
