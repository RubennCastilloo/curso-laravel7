<?php include 'includes/header.php';

class MenuRestaurant {   
    public $nombre = 'Nombre del producto';
    public $precio = 0;
}

$bebida = new MenuRestaurant();
//Sintaxis para cambiar el valor
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio= 30;

//Sintaxis para mostrar un valor
echo $bebida->nombre;

var_dump($bebida);
 

$postre = new MenuRestaurant();
$postre->nombre = 'Postre';
$postre->precio = 100;

var_dump($postre);
    