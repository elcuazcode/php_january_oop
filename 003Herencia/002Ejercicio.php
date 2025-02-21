<?php

class Animal{

  protected $nombre;

   // CONSTRUCTOR DE LA CLASE PADRE
   // lA CLASE HIJA NO AGREGA MAS, ENTONCES UTILIZA ESTE CONSTRUCTOR
   // CON ESTOS PARAMETROS
  public function __construct($nombre){
    $this->nombre = $nombre;
  }

  public function hacerRuido(){
    return $this->nombre."Hace un ruido";
  }

}



class Perro extends  Animal{

  // HEREDA LOS ATRIBUTOS DE LA CLASE PADRE
  public function hacerSonido(){
    return $this->nombre."Wow";
  }
}



$terry = new Perro("boby");
// EL OBJETO PUEDE UTILIZAR EL METODO DE LA CLASE PADRE
echo $terry->hacerRuido()."\n";
// O EL METODO DE SU CLASE PADRE
echo $terry->hacerSonido()."\n";

?>