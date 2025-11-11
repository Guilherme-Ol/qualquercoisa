<?php

require_once("Viagem.php");

class Van extends Viagem{

    public function getPreco(){
        $dados = $this->getAluguel() + $this->getKm() * 2.1;
        return $dados;
    }

}