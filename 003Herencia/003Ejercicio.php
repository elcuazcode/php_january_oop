<?php

class Empleado {
  protected $nombre;
  protected $salario;

  public function __construct($nombre, $salario){
    $this->nombre = $nombre;
    $this->salario = $salario;
  }

  public function mostrarDetalles(){
    return "Nombre {$this->nombre} Salario {$this->salario} ";
  }
}

class Gerente extends Empleado{
  private $departamento;

  public function __construct($nombre, $salario, $departamento){
    parent::__construct($nombre, $salario);
    $this->departamento = $departamento;
  }

  public function monstrarDetallesGerentes(){
    return parent::mostrarDetalles()."\n Departamento "."{$this->departamento}";
  }



}


$gerente = new Gerente("Ramon", 1000, "Finanzas");
echo $gerente->monstrarDetallesGerentes();
?>