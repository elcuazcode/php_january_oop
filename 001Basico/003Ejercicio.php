<?php

class Usuario {
  


  // Propiedades o Atributos
  // Son declarados como public (publicos) pueden ser accedidos desde afuera
  public $nombre;
  public $email;

  // Metodos
  // Declarado como public (publicos) pueden ser accedidos desde afuera
  public function saludad(){
    return "Hola, soy {$this->nombre} y mi email es {$this->email}.";

  }

}


$cokie = New Usuario();            // Instanciar un objeto
$cokie->nombre = "Jony Bravo";     // darle un valor a un atributo
$cokie->email = "jony@gmail.com";  


// Acceder a un metodo de clase
echo $cokie->saludad();


// En esta nueva sintaxis
// Utilizamos -> para acceder a las propiedes y metodos del objeto






?>