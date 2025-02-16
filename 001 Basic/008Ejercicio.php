<?php

class Vehiculo{

  public $marca;
  public $modelo;
  public $anio;


  public function __construct($marca, $modelo, $anio)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->anio = $anio;
    
  }

  public function mostrarDetalle(){
    return "
            Marca {$this->marca}
            Modelo {$this->modelo}
            Año {$this->anio}"."\n";
  }


}


$toyota = new Vehiculo("toyota", "Corolla", 2025);
echo $toyota->mostrarDetalle();



?>