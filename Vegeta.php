<?php

require_once "Personagem.php";

class Vegeta extends Personagem
{
    public function __construct()
    {
        parent::__construct("Vegeta", 100, "Ego");

        $this->adicionarAtaque("Big Bang Attack", 21);
        $this->adicionarAtaque("Galick Gun", 19);
        $this->adicionarAtaque("Soco Duplo", 17);
        $this->adicionarAtaque("Rajada de Energia Real", 23);
        $this->adicionarAtaque("Final Flash", 29);
    }
}