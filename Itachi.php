<?php

require_once "Personagem.php";

class Itachi extends Personagem
{
    public function __construct()
    {
        parent::__construct("Itachi", 100, "Mangekyou Sharingan");

        $this->adicionarAtaque("Amaterasu", 25);
        $this->adicionarAtaque("Tsukuyomi", 27);
        $this->adicionarAtaque("Jutsu Bola de Fogo", 19);
        $this->adicionarAtaque("Shuriken", 17);
        $this->adicionarAtaque("Susanoo", 29);
    }
}