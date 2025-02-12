<?php

class Producto {

  public $nombre;
  public $precio;
  public $stock;

  public function mostrarDetalle(){

    return "
            Nombre: {$this->nombre} 
            Precio: {$this->precio} 
            Stock {$this->stock}";
  }


}

$toalla = New Producto();
$toalla->nombre = "Toalla";
$toalla->precio = "\$50";
$toalla->stock = "Sin existencias";
$toalla->precio = "\$100"; // Puedo modificar el valor
// del atributo
echo $toalla->mostrarDetalle();


?>