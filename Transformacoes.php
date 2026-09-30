<?php

class Transformacoes
{
    public array $lista;

    public function __construct()
    {
        $this->lista = array();

        $this->adicionar("Goku", "Super Saiyajin 3");
        $this->adicionar("Vegeta", "Ego");
        $this->adicionar("Piccolo", "Piccolo Orange");
        $this->adicionar("Naruto", "Modo Sabio");
        $this->adicionar("Itachi", "Mangekyou Sharingan");
        $this->adicionar("Jotaro", "Star Platinum: Za Warudo");
        $this->adicionar("Dio", "The World: Za Warudo");
        $this->adicionar("Luffy", "Gear 5");
        $this->adicionar("Ichigo", "Bankai");
        $this->adicionar("Sukuna", "Santuario Malevolente");
    }

    public function adicionar(string $nome, string $transformacao)
    {
        $this->lista[] = array(
            "nome" => $nome,
            "transformacao" => $transformacao
        );
    }

    public function mostrarTodas()
    {
        echo "\n";
        echo "========================================\n";
        echo "         LISTA DE TRANSFORMACOES\n";
        echo "========================================\n";
        echo "\n";
        echo "Regra: quando a vida do personagem fica\n";
        echo "abaixo de 50, a cada dano recebido existe\n";
        echo "15% de chance dele se transformar.\n";
        echo "Transformado, todos os ataques ganham +15 de dano.\n";
        echo "\n";

        for ($i = 0; $i < count($this->lista); $i++) {
            echo $this->lista[$i]["nome"] . " -> " . $this->lista[$i]["transformacao"] . "\n";
        }

        echo "\n";
    }
}