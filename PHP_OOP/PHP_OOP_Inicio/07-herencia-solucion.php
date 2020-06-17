<?php include 'includes/header.php';


class MenuRestaurant {
    public $nombre;
    public $precio;

    public function __construct( $nombre, $precio ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebida extends MenuRestaurant {
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct($nombre, $precio);
        $this->medida = $medida;
    }

    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant{
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct($nombre, $precio);
        $this->peso = $peso;
    }

    //Reescribimos el metodo del padre
    public function getPrecio()
    {
        return "El precio de este postre es " . $this->precio;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

$bebida = new Bebida('Jugo de Naranja', 30, '300ml');
// var_dump($bebida);
echo "El precio es " . $bebida->getPrecio();

$postre = new Postre('Pastel de Chocolate', 100, '150g');
// var_dump($postre);
echo $postre->getPrecio();