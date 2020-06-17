<?php include 'includes/header.php';

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;


        /**
         * Get the value of nombre click derecho en el nombre de la variable y luego click en Insert PHP Getter
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }
    }


$bebida = new MenuRestaurant();
$bebida->nombre = "Jugo de Naranja";
$bebida->precio = 30;
echo $bebida->getNombre();
echo $bebida->getPrecio();

echo "<br>";

$postre = new MenuRestaurant();
$postre->nombre = "Pastel de Chocolate";
$postre->precio = 100;
echo $postre->getNombre();
echo $postre->getPrecio();
