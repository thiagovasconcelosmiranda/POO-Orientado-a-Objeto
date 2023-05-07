<?php

class Funcionario  {
  private $nome;
  private $idade;

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNome(){
    return $this->nome;
  }


  public function setIdade($idade){
      $this->idade = $idade;
  }

  public function getIdade(){
    return $this->idade;
  }


  


}