<?php

require "FuncionarioClass.php";
require "Salario.php";



$funcionario = new Funcionario();
$funcionario->setNome('Thiago');
$funcionario->setIdade(39);
//
$salario = new Salario();

$salario->setSalarioBase(1000);
$salario->setHorasExtras(10);
$salario->setValorHora(20);


echo "O funcionário ". $funcionario->getNome() . " Tem "  .$funcionario->getIdade() . " anos.
 <br> Recebe um salário líquido de R$ " . $salario->getSalario();

