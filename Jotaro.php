<?php

require_once "Personagem.php";

class Jotaro extends Personagem
{
    public function __construct()
    {
        parent::__construct("Jotaro", 100, "Star Platinum: Za Warudo");

        $this->adicionarAtaque("ORA ORA ORA", 23);
        $this->adicionarAtaque("Soco Star Platinum", 20);
        $this->adicionarAtaque("Chute", 18);
        $this->adicionarAtaque("Investida", 21);
        $this->adicionarAtaque("Time Stop", 30);
    }
}