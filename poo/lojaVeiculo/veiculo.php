<?php

 class Veiculo {
  
    public $modelo;
    public $cor;
    public $ano;


    public function setModelo($modelo){
       $this->modelo = $modelo;
    }

    public function getModelo(){
       return $this->modelo;
     }

     public function setCor($cor){
        $this->cor = $cor;
     }
 
     public function getCor(){
        return $this->cor;
      }

      public function setAno($ano){
        $this->ano = $ano;
     }
 
     public function getAno(){
        return $this->ano;
      }

}