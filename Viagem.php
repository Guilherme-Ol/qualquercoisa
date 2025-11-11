<?php

abstract class Viagem{

    protected $aluguel;
    protected $km;
    
        public function getPreco(){
            
        }

    /**
     * Get the value of aluguel
     */
    public function getAluguel()
    {
        return $this->aluguel;
    }

    /**
     * Set the value of aluguel
     */
    public function setAluguel($aluguel): self
    {
        $this->aluguel = $aluguel;

        return $this;
    }

    /**
     * Get the value of km
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set the value of km
     */
    public function setKm($km): self
    {
        $this->km = $km;

        return $this;
    }
}