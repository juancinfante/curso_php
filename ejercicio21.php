<?php 

// CLASES Y OBJETOS

class persona{
    
    public $nombre; // Propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ // Acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola me llamo ".$this->nombre;
    }

}

// HERENCIA

class trabajador extends persona{
    public $puesto;

    public function imprimirDatos(){
        echo "Hola soy ".$this->nombre." y soy ".$this->puesto;
    }
}



$objAlumno = new persona(); // Creacion de objeto
$objAlumno->asignarNombre("Jose"); // llamada a un metodo

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Maria");

$objAlumno->imprimirNombre();
$objAlumno2->imprimirNombre();

// HERENCIA 
$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Juan Cruz");
$objTrabajador->puesto="Programador Senior";
$objTrabajador->imprimirDatos();



?> 