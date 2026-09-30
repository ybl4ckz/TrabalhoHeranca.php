<?php

require_once "Personagem.php";

class Ichigo extends Personagem
{
    public function __construct()
    {
        parent::__construct("Ichigo", 100, "Bankai");

        $this->adicionarAtaque("Getsuga Tensho", 22);
        $this->adicionarAtaque("Getsuga Jujisho", 25);
        $this->adicionarAtaque("Corte de Zangetsu", 20);
        $this->adicionarAtaque("Shunpo", 18);
        $this->adicionarAtaque("Getsuga Negro", 29);
    }
}