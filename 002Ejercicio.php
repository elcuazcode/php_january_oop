<?php

class Empledo{

  private $nombre;
  private $salario;

  public function __construct($nombre, $salario){
    $this->nombre = $nombre;
    $this->salario = $salario;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getSalario(){
    return $this->salario;
  }

  public function setSalario($nuevoSalario){
    if($nuevoSalario > 0){
      $this->salario = $nuevoSalario;
  }else{
    echo "El nuevo salario no puede ser negativo \n";
  }
  }

  public function incremento($incremento){
    if($incremento > 0){
      $this->salario += $incremento;
      echo "Incremento {$incremento} Nuevo salario {$this->salario} \n ";
    }else{
      echo "El incremento no puede ser negativo\n";
    }


}
}

$juan = new Empledo("Juan", 10000);
echo $juan->getSalario();
$juan->incremento(300);
$juan->setSalario(400);
echo $juan->getSalario();
?>