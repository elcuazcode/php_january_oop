<?php


class Vehiculo{

  protected $marca;
  protected $modelo;

  public function __construct($marca, $modelo){
    $this->marca = $marca;
    $this->modelo = $modelo;

  }

  public function mostrarDetalles(){
    return "La marca es {$this->marca} El modelo es {$this->modelo}\n";
  }


}


// CLASE HIJA

class Coche extends Vehiculo{

  private $puertas;

  public function __construct($marca, $modelo, $puertas){
    parent::__construct($marca, $modelo);
    $this->puertas = $puertas;
  }

  public function mostrarDetallesCoche(){
    return parent::mostrarDetalles() . "Numero de puertas {$this->puertas}\n";
  }

  public function mostrar(){
    return "{$this->marca} {$this->modelo} {$this->puertas}";
  }

  
}

$corolla = new Coche("Nisan", "Lancer", 5);
echo $corolla->mostrar();


?>