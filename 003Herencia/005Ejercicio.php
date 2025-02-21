<?php

class CuentaBancaria{

  protected $titular;
  protected $saldo;

  public function __construct($titular, $saldo){
    $this->titular = $titular;
    $this->saldo = $saldo;
  }

  public function infoBancaria(){
    return "{$this->titular} {$this->saldo}";
  }



}


class CuentaAhorro extends CuentaBancaria{
  private $interes;

  public function __construct($titular, $saldo, $interes){
    parent::__construct($titular, $saldo);
    $this->interes = $interes;
  }


  // metodo de aumenta el saldo en funcion del interes definido
  // al instanciar al objeto.
  public function interesAnual(){
    $this->saldo += ($this->interes * $this->saldo) / 100;
    return "Su nuevo saldo es {$this->saldo}"; 
  }

}

$joven = new CuentaAhorro("Juan", 100, 10);
echo $joven->interesAnual();





?>