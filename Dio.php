<?php

require_once "Personagem.php";

class Dio extends Personagem
{
    public function __construct()
    {
        parent::__construct("Dio", 100, "The World: Za Warudo");

        $this->adicionarAtaque("Soco do The World", 20);
        $this->adicionarAtaque("MUDA MUDA MUDA", 23);
        $this->adicionarAtaque("Roda de Facas", 18);
        $this->adicionarAtaque("Investida Vampirica", 21);
        $this->adicionarAtaque("Time Stop", 30);
    }
}