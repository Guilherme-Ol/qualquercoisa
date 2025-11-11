<?php

require_once("Viagem.php");

class Microonibus extends Viagem{


    public function getPreco(){
        $dados = $this->getAluguel() + $this->getKm() * 2.75;
        return $dados;
    }
}