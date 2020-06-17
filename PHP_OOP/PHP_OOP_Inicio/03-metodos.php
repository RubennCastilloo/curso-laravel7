<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;
    public function obtenerPorductoyNombre()
    {
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio;
    }
}


// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio = 100;
$bebida->obtenerPorductoyNombre();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de chocolate';
$postre->precio = 150;
$postre->obtenerPorductoyNombre();

echo "<br>";

$corte = new MenuRestaurant();
$corte->nombre = 'Rib Eye';
$corte->precio = 550;
$corte->obtenerPorductoyNombre();