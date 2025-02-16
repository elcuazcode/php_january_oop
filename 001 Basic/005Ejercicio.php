<?php

class Libro{

  public $libro;
  public $autor;
  public $anio;

  public function resumen(){
    return "
            $this->libro
            $this->autor
            $this->anio";
  }

}

$miguel = New Libro();
$miguel->libro = "Hombres de maiz";
$miguel->autor = "Miguel Angel";
$miguel->anio = 2025;

echo $miguel->resumen();
?>