<?php

class CuentaBancaria{

  public $titular;
  public $saldo;

  public function __construct($titular, $saldoInicial){
    $this->titular = $titular;
    $this->saldo = $saldoInicial;
  }


  // Aqui sucede lo importante
  // Utilizar un atributo de clase $this->
  // Utilizar el argumento que se va a recibir cuando
  // se intente utilizar el metodo
  // LA LOGICA FUNCIONA COMO UNA FUNCION
  // SOLO QUE UTILIZANDO UNA SINTAXIS ESPECIFICA
  public function depositar($cantidad){
    echo "Saldo Inicial {$this->saldo}\n";
    $this->saldo += $cantidad;
    echo "Deposito de $cantidad echa por {$this->titular}. Sldo actual {$this->saldo}";

  }

}


$ramon = new CuentaBancaria("ramon", 300);
$ramon->depositar(500);




?>