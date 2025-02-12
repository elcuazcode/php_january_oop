<?php

// CONSTRUCTOR Y DESTRUCTOR


class Persona {

  public $nombre;
  public $edad;

  // EL CONSTRUCTOR PIDE QUE CADA VEZ QUE SE CREA UN OBJETO
  // PIDE VALORES Y A ESOS VALORES SE LES ASIGNA 
  public function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
    echo "Se ha creado a una persona llamada {$this->nombre} \n";

  }

  public function presentarse(){
    return "Hola soy {$this->nombre} y tengo {$this->edad} de edad";

  }

  public function __destruct(){
    echo "La persona {$this->nombre} ha sido elimidada.\n";
  }
}

$juana = new Persona("Maria", 20);
echo $juana->presentarse(). "\n";


?>