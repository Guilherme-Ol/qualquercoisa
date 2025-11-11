<?php

require_once("Viagem.php");

class Carro extends Viagem{


    public function getPreco(){
        $dados = $this->getAluguel() + $this->getKm() * 1.5;
        return $dados;
    }
}