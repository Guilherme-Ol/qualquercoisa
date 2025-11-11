<?php

require_once("Viagem.php");

class Onibus extends Viagem{


    public function getPreco(){
        $dados = $this->getAluguel() + $this->getKm() * 4.2;
        return $dados;
    }
}