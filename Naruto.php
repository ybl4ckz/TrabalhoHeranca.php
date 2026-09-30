<?php

require_once "Personagem.php";

class Naruto extends Personagem
{
    public function __construct()
    {
        parent::__construct("Naruto", 100, "Modo Sabio");

        $this->adicionarAtaque("Rasengan", 22);
        $this->adicionarAtaque("Rasenshuriken", 28);
        $this->adicionarAtaque("Multiplos Clones", 18);
        $this->adicionarAtaque("Combo Naruto", 20);
        $this->adicionarAtaque("Bijuu Dama", 30);
    }
}