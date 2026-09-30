<?php

require_once "Personagem.php";

class Piccolo extends Personagem
{
    public function __construct()
    {
        parent::__construct("Piccolo", 100, "Piccolo Orange");

        $this->adicionarAtaque("Makankosappo", 25);
        $this->adicionarAtaque("Granada Infernal", 20);
        $this->adicionarAtaque("Rajada de Ki", 17);
        $this->adicionarAtaque("Soco Namekuseijin", 18);
        $this->adicionarAtaque("Ataque Explosivo", 24);
    }
}