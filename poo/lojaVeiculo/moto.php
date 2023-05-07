<?php


class Moto extends Veiculo {
    private $dargrau;

    public function setDarGrau($grau){
      if($grau == "on"){
        $this->dargrau = "Grau dado";
      }else{
        $this->dargrau = "Não deu grau";
      }
      
    }

    public function getDarGrau(){
         return $this->dargrau;
      }

      public function getStatus(){
        return "<h1>Veiculo Moto</h1> <br>" .
        "<h3>Modelo: ". $this->getModelo(). "</h3><br>" .
        "<h3>Cor: ". $this->getCor() . " </h3><br>" .
        "<h3> Ano: " .$this->getAno() . "</h3> <br>" .
        "<h3> Status do Dar grau: ". $this->getDarGrau() ."<h3>";

      }
}