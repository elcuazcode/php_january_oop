<?php

class Producto{

  public $nombre;
  public $precio;

  public function __construct($nombre,$precio){
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getPrecio(){
    return $this->precio;
  }

  public function setPrecio($nuevoPrecio){
    if($nuevoPrecio > 0){
      $this->precio = $nuevoPrecio;
    }else{
      echo "Error: el nuevo precio no puede ser negativo \n";
    }
  }

  // un poco mas de logica dentro de este metodo
  public function aplicarDescuento($porcentaje){
    if($porcentaje > 0 && $porcentaje <= 100){
      $descuento = ($porcentaje * $this->precio) / 100;
      $this->precio -= $descuento;
      echo "Descuento de {$descuento}% aplicado. Nuevo precio {$this->precio} \n";
    }else{
      echo "El descuento no puede ser negativo";
    }
  }




}

$suli = new Producto("arroz", 100);
$suli->aplicarDescuento(40);
$suli->setPrecio(300);


?>