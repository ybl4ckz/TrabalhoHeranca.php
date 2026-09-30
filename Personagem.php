<?php

class Personagem
{
    public string $nome;
    public int $vida;
    public int $vidaMaxima;
    public array $ataques;
    public string $transformacao;
    public bool $transformado;

    public function __construct(string $nome, int $vida, string $transformacao)
    {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->vidaMaxima = $vida;
        $this->transformacao = $transformacao;
        $this->transformado = false;
        $this->ataques = array();
    }

    public function adicionarAtaque(string $nome, int $dano)
    {
        $this->ataques[] = array(
            "nome" => $nome,
            "dano" => $dano
        );
    }

    public function mostrarAtaques()
    {
        for ($i = 0; $i < count($this->ataques); $i++) {
            echo ($i + 1) . " - " . $this->ataques[$i]["nome"];
            echo " | Dano: " . $this->ataques[$i]["dano"] . "\n";
        }
    }

    public function atacar(int $numero)
    {
        $ataque = $this->ataques[$numero];

        $dano = $ataque["dano"];

        if ($this->transformado == true) {
            $dano = $dano + 15;
        }

        return $dano;
    }

    public function receberDano(int $dano)
    {
        $this->vida = $this->vida - $dano;

        if ($this->vida < 0) {
            $this->vida = 0;
        }

        echo $this->nome . " recebeu " . $dano . " de dano!\n";
        echo "Vida de " . $this->nome . ": " . $this->vida . "\n";

        $this->verificarTransformacao();
    }

    public function verificarTransformacao()
    {
        if ($this->vida < 50 && $this->transformado == false) {

            $chance = rand(1, 100);

            if ($chance <= 15) {
                $this->transformar();
            }
        }
    }

    public function transformar()
    {
        $this->transformado = true;

        echo "\n";
        echo "========================================\n";
        echo $this->nome . " SE TRANSFORMOU!\n";
        echo "Transformacao: " . $this->transformacao . "\n";
        echo "O dano dos ataques aumentou!\n";
        echo "========================================\n";
        echo "\n";
    }

    public function estaVivo()
    {
        if ($this->vida > 0) {
            return true;
        }

        return false;
    }

    public function mostrarStatus()
    {
        echo $this->nome . " - Vida: " . $this->vida . "/" . $this->vidaMaxima;

        if ($this->transformado == true) {
            echo " - TRANSFORMADO";
        }

        echo "\n";
    }
}