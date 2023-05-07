<?php

class Salario extends Funcionario  {
    private $salarioBase;
    private $horasExtras;
    private $valorHora;


   public function setSalarioBase($sb){
      $this->salarioBase = $sb;
   }

   public function getSalarioBase(){
    $aumento = 0;
    if($this->horasExtras > 0){
        $aumento = (10/100) * $this->salarioBase;
    }
      return $this->salarioBase + $aumento;
   }

   public function setHorasExtras($h){
    $this->horasExtras = $h;
  }

  public function getHorasExtras(){
    return $this->horasExtras;
  }

  public function setValorHora($h){
    $this->valorHora = $h;
  }

  public function getValorHora(){
    return $this->valorHora;
}

  public function getSalario(){
     return $this->getSalarioBase() + ( $this->getHorasExtras() * $this->getValorHora());
  }

 
}