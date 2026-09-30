<?php

require_once "Personagem.php";

class Goku extends Personagem
{
    public function __construct()
    {
        parent::__construct("Goku", 100, "Super Saiyajin 3");

        $this->adicionarAtaque("Kamehameha", 20);
        $this->adicionarAtaque("Kaioken", 18);
        $this->adicionarAtaque("Genki Dama", 25);
        $this->adicionarAtaque("Soco do Dragao", 22);
        $this->adicionarAtaque("Teletransporte + Kamehameha", 28);
    }
}