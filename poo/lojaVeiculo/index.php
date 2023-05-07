<?php

require "carro.php";
require "moto.php";

$moto = new Moto();
$carro = new Carro();

if(isset($_GET['marcaMoto'])){
   $marca = $_GET['marcaMoto'];
   $cor = $_GET['corMoto'];
   $ano = $_GET['anoMoto'];
   $darGrau = $_GET['darGrau'];
  
   $moto->setModelo($marca);
   $moto->setCor($cor);
   $moto->setAno($ano);
   $moto->setDarGrau($darGrau);
}

if(isset($_GET['marcaCarro'])){
    $marca = $_GET['marcaCarro'];
    $cor = $_GET['corCarro'];
    $ano = $_GET['anoCarro'];
    $parabrisa = $_GET['statusparabrisa'];
    $autoradio = $_GET['statusRdio'];
 
    $carro->setModelo($marca);
    $carro->setCor($cor);
    $carro->setAno($ano);
    $carro->setParabrisa($parabrisa);
    $carro->setAutoradio($autoradio);
 }



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>loja de veiculo</title>
</head>
<body>
      <ul>
        <img src="https://img2.gratispng.com/20180716/gxo/kisspng-logo-visiting-card-motor-vehicle-designagentur-logo-erstellen-5b4cf9a8619740.0210227915317713043997.jpg" height="80"/>
        <div class="link">
          <li><a>Home</a></li>
          <li><a>Sobre</a></li>
        </div>
      </ul>
      <div class="container">
       <div class="row">
          <div class="col">
          <form method="get">
             <h2>Moto</h2>
             <div class="itemInput">
                <label>Marca:</label><br>
                <input type="text" name="marcaMoto" placeholder="Digite a marca"/>
             </div>
             <div class="itemInput">
                <label>Cor:</label><br>
               <input type="text" name="corMoto" placeholder="Digite a cor"/>
             </div>
             <div class="itemInput">
               <label>Ano:</label><br>
               <input type="text" name="anoMoto" placeholder="Digite a ano"/>
             </div>
            <div class="itemInput ajust">
             <h3> Dar grau</h3>
              <div class="item">
               <input type="radio" value="on" name="darGrau"/>
               <label>ON:</label>
            </div>
            <div class="item">
             <input type="radio" value="off" name="darGrau"/>
             <label>OFF:</label>
           </div>
        </div>
       <div class="itemInput">
         <button type="submit">ENVIAR</button>
       </div>
     </form>
     </div>
        <div class="col">
          <form method="get">
            <h2>Carro</h2>
            <div class="itemInput">
                <label>Marca:</label><br>
                <input type="text"name="marcaCarro" placeholder="Digite a marca"/>
            </div>
            <div class="itemInput">
              <label>Cor:</label><br>
              <input type="text" name="corCarro" placeholder="Digite a cor"/>
           </div>
           <div class="itemInput">
            <label>Ano:</label><br>
             <input type="text" name="anoCarro" placeholder="Digite a ano"/>
           </div>
           <div class="itemInput ajust">
             <h3>Ligar parabrisa</h3>
             <div class="item">
                <input type="radio" value="on" name="statusparabrisa" placeholder="Digite a ano"/>
                 <label>ON:</label>
              </div>
              <div class="item">
                <input type="radio" value="off" name="statusparabrisa" placeholder="Digite a ano"/>
                 <label>OFF:</label>
              </div>
           </div>
           <div class="itemInput ajust">
             <h3>Ligar Rádio</h3>
             <div class="item">
                <input type="radio" value="on" name="statusRdio" placeholder="Digite a ano"/>
                 <label>ON:</label>
              </div>
              <div class="item">
                <input type="radio" value="off" name="statusRdio" placeholder="Digite a ano"/>
                 <label>OFF:</label>
              </div>
           </div>
        <div class="itemInput">
          <button type="submit">ENVIAR</button>
       </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col display" >
    <div>
    <?php
       echo $moto->getStatus();
     ?>
    </div>
    
  </div>
  <div class="col display">
      <div>
        <?php
          echo $carro->getStatus();;
        ?>
      </div>
  </div>
</div>
</body>
</html>