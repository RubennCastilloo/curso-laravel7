 <?php include 'includes/header.php';

 // La interface es una plantilla, un template para las clases, no tiene logica solamente tienen como se van a llevar los metodos
 // que van a tomar y que valor retornarian.

 interface RestauranteInterface
 {
     public function getNombre();

     public function getPrecio();
 }

class MenuRestaurant implements RestauranteInterface{ 
    public $nombre; 
    protected $precio;

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