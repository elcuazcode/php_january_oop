<?php

class Juego{

  public $nombre;
  public $puntuacion;

  public function __construct($nombre, $puntuacion){
    $this->nombre = $nombre;
    $this->puntuacion = $puntuacion;
    echo "Inicia con un punteo de {$this->puntuacion}\n";
  }

  public function jugar(){
    $this->puntuacion += 10;
  }

  public function __destruct(){
    echo "El juego termimna con una puntuacion {$this->puntuacion}\n";
  }


}

$gamer = new Juego("ramon", 30);
$gamer->jugar();
$gamer->jugar();
$gamer->jugar();
$gamer->jugar();

?>