<?php


class Persona{

  // PROTECTED PARA QUE PUEDAN SER ACCEDIDOS A LA CLASE QUE HEREDA
  protected $nombre;
  protected $edad;

  public function __construct($nombre, $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  // ESTE METODO PUEDE SER USADO POR LA CLASE HIJA
  public function mostrarInfo(){
    return "{$this->nombre} y {$this->edad}\n";
}

}

class Estudiante extends Persona{

  // PRIVADO, PORQUE NO DEBE DE SER ACCEDIDO DIRECTAMENTE
  // SINO QUE DEBE DE SER GESTIONANDO POR MEDIO DE UN GETTER
  private $cursos;


  // EL CONSTRUCTOR, QUE UTILIZA EL CONTRUCTOR DE LA CLASE PADRE
  // ADEMAS DE AGREGARLE UN ATRIBUTO MAS
  public function __construct($nombre, $edad, $cursos){
    parent::__construct($nombre, $edad);
    $this->cursos = $cursos;
  }

  // METODO QUE UTILIZA UN METODO PADRE DIRECTAMENTE DENTRO DE UN METODO
  // DE LA CLASE HIJA
  public function mostrarDoble(){
    return parent::mostrarInfo()." \n {$this->cursos}";
  }


  // UTILIZAR LOS ATRIBUTOS DE UNA CLASE PADRE DENTRO DE UN METODO
  // DE LA CLASE HIJA
  public function simple(){
    return "{$this->nombre} {$this->edad}";
  }
}


$juan = new Estudiante("jony", 25, "Matematicas");
echo $juan->simple();


?>