<?php



require '/xampp/htdocs/backend/Shopcart/Classes/Product.php';
require '/xampp/htdocs/backend/Shopcart/Classes/ProdArray.php';


$aux = new Products();
//$aux->addProduct(new Product("(Nombre)", (precio), "../Media/img/(ID de imagen)", '00'), 0);
$aux->addProduct(new Product("Aceite1", 2100000, "../Media/img/0001.png", '00'), 0);
//ponerlo a partir de aqui

$productos = $aux->getProducts();
file_put_contents('cart.php', '<?php return ' . var_export($productos, true) . ';');


//final

?>