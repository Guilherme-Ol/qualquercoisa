<?php

require_once("modelo/Carro.php");
require_once("modelo/Microonibus.php");
require_once("modelo/Onibus.php");
require_once("modelo/Van.php");
require_once("modelo/Viagem.php");

$escolha = readline("Informe o meio de transporte para a viagem 1-Carro 2-Van 3-Ônibus 4-Micro-ônibus: \n");
if($escolha == 1){
    $transporte = new Carro();
    $transporte->setAluguel(readline("Informe o valor do aluguel: \n"));
    $transporte->setKm(readline("Informe quantos Km foram rodados: \n"));
    echo "O veículo do tipo carro, foi alugado por R$ ". $transporte->getAluguel() . ", rodou ". $transporte->getKm() . " quilômetros com custo total de R$ ". $transporte->getPreco() . ".\n";
}
if($escolha == 2){
    $transporte = new Van();
    $transporte->setAluguel(readline("Informe o valor do aluguel: \n"));
    $transporte->setKm(readline("Informe quantos Km foram rodados: \n"));
    echo "O veículo do tipo van, foi alugado por R$ ". $transporte->getAluguel() . ", rodou ". $transporte->getKm() . " quilômetros com custo total de R$ ". $transporte->getPreco() . ".\n";
}
if($escolha == 3){
    $transporte = new Onibus();
    $transporte->setAluguel(readline("Informe o valor do aluguel: \n"));
    $transporte->setKm(readline("Informe quantos Km foram rodados: \n"));
    echo "O veículo do tipo ônibus, foi alugado por R$ ". $transporte->getAluguel() . ", rodou ". $transporte->getKm() . " quilômetros com custo total de R$ ". $transporte->getPreco() . ".\n";
}
if($escolha == 4){
    $transporte = new Microonibus();
    $transporte->setAluguel(readline("Informe o valor do aluguel: \n"));
    $transporte->setKm(readline("Informe quantos Km foram rodados: \n"));
    echo "O veículo do tipo micro-ônibus, foi alugado por R$ ". $transporte->getAluguel() . ", rodou ". $transporte->getKm() . " quilômetros com custo total de R$ ". $transporte->getPreco() . ".\n";
}