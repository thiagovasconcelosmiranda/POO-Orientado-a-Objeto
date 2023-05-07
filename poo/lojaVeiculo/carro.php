<?php
require "veiculo.php";

class Carro extends Veiculo {
    private $parabrisa;
    private $autoradio;

    public function setParabrisa($ligar){
        if($ligar == "ligar"){
            $this->parabrisa = "123 ligado";
          }else{
            $this->parabrisa = "123 desligado";
          }

    }

    public function getParabrisa(){
        return $this->parabrisa;

    }

    public function setAutoradio($ligar){
        if($ligar == "ligar"){
          $this->autoradio = "123 ligado";
        }else{
            $this->autoradio = "123 desligado";
        }

    }

    public function getAutoradio(){
        return $this->autoradio;

    }

     public function getStatus(){
       return "<h1>Veiculo Carro </h1><br>" .
       " <h3>Modelo: " . $this->getModelo()." </h3><br>".
       " <h3>Cor: " . $this->getCor() . " </h3> <br>" .
       " <h3>Ano: " . $this->getAno(). " </h3><br>" .
       " <h3> Parabrisa: " .$this->getParabrisa() . "</h3><br>" .
       " <h3> Autoradio: " .$this->getAutoradio() . "</h3>";

    }



}