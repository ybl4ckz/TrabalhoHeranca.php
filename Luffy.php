<?php

require_once "Personagem.php";

class Luffy extends Personagem
{
    public function __construct()
    {
        parent::__construct("Luffy", 100, "Gear 5");

        $this->adicionarAtaque("Gomu Gomu no Pistol", 19);
        $this->adicionarAtaque("Red Hawk", 22);
        $this->adicionarAtaque("Gatling Gun", 23);
        $this->adicionarAtaque("Elephant Gun", 25);
        $this->adicionarAtaque("King Kong Gun", 30);
    }
}