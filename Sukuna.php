<?php

require_once "Personagem.php";

class Sukuna extends Personagem
{
    public function __construct()
    {
        parent::__construct("Sukuna", 100, "Santuario Malevolente");

        $this->adicionarAtaque("Cleave", 22);
        $this->adicionarAtaque("Dismantle", 20);
        $this->adicionarAtaque("Flecha de Fogo", 27);
        $this->adicionarAtaque("Corte Amaldicoado", 24);
        $this->adicionarAtaque("Malevolent Shrine", 30);
    }
}