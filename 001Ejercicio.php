<?php

// Encapsulamiento
// utilizar getters y setters para modificas los atributos de clasa

// public puede ser accedido desde cualquier parte
// private solo dentro de la clase
// protected dentro de la clase y los que heredan de ella

// Utilizando getters y setters podemos modificar los atributos privados de una clase

class CuentaBancaria{

  private $titular;
  private $saldo;

  public function __construct($titular, $saldoInicial){
    $this->titular = $titular;
    $this->saldo = $saldoInicial;

  }

  // Estos dos metodos son getters
  public function getTitular(){
    return $this->titular;
  }

  public function getSaldo(){
    return $this->saldo;
  }

  // Estos metodo son setters, modifican un atributo privado
  // atraves de un metodo, y no directamente sobre el atributo
  // a esto llamamos encapsulamiento
  public function setSaldo($nuevoSaldo){
    if($this->saldo >= 0){
      $this->saldo = $nuevoSaldo;
    }else{
      echo "El saldo no puede ser negativo\n";
    }
  }

  public function depositar($cantidad){
    if($cantidad > 0){
      $this->saldo += $cantidad;
      echo "Deposito de {$cantidad} \n Nuevo Saldo {$this->saldo}";
    }else {
      echo "La cantidad a depositvar no puede ser negativa\n";
    }
  }

  // Estos metodos de clase pueden ser utilizados por todos 
  // los objetos
  public function retirar($cantidad){
    if($cantidad > 0 && $cantidad <= $this->saldo){
      $this->saldo -= $cantidad;
      echo "Retiro de {$cantidad} Nuevo Saldo {$this->saldo}\n ";
    }else{
      echo "Error: Fondos insuficientes o dato erroneo\n";
    }
  }




}



$chepe = new CuentaBancaria("Chepe", 1000);
$chepe->setSaldo(4000);
$chepe->retirar(-3500);
$chepe->depositar(-9000);


?>