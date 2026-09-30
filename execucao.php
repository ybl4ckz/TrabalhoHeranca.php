<?php

require_once "modelo/Personagem.php";
require_once "modelo/Transformacoes.php";
require_once "modelo/Goku.php";
require_once "modelo/Vegeta.php";
require_once "modelo/Piccolo.php";
require_once "modelo/Naruto.php";
require_once "modelo/Itachi.php";
require_once "modelo/Jotaro.php";
require_once "modelo/Dio.php";
require_once "modelo/Luffy.php";
require_once "modelo/Ichigo.php";
require_once "modelo/Sukuna.php";


function lerTexto()
{
    $linha = fgets(STDIN);
    $linha = trim($linha);
    return $linha;
}


function limparTela()
{
    system("clear");
}


function mostrarTitulo()
{
    echo "========================================\n";
    echo "              MUGEN ANIME\n";
    echo "========================================\n";
}


function mostrarPersonagens()
{
    echo "\n";
    echo "PERSONAGENS DISPONIVEIS\n";
    echo "1 - Goku\n";
    echo "2 - Vegeta\n";
    echo "3 - Piccolo\n";
    echo "4 - Naruto\n";
    echo "5 - Itachi\n";
    echo "6 - Jotaro\n";
    echo "7 - Dio\n";
    echo "8 - Luffy\n";
    echo "9 - Ichigo\n";
    echo "10 - Sukuna\n";
}


function escolherPersonagem(int $numero)
{
    if ($numero == 1) {
        return new Goku();
    }

    if ($numero == 2) {
        return new Vegeta();
    }

    if ($numero == 3) {
        return new Piccolo();
    }

    if ($numero == 4) {
        return new Naruto();
    }

    if ($numero == 5) {
        return new Itachi();
    }

    if ($numero == 6) {
        return new Jotaro();
    }

    if ($numero == 7) {
        return new Dio();
    }

    if ($numero == 8) {
        return new Luffy();
    }

    if ($numero == 9) {
        return new Ichigo();
    }

    if ($numero == 10) {
        return new Sukuna();
    }

    return null;
}


function mostrarInformacoesPersonagem(Personagem $personagem)
{
    echo "\n";
    echo "========================================\n";
    echo "PERSONAGEM: " . $personagem->nome . "\n";
    echo "VIDA: " . $personagem->vida . "\n";
    echo "TRANSFORMACAO: " . $personagem->transformacao . "\n";
    echo "========================================\n";

    echo "ATAQUES:\n";

    $personagem->mostrarAtaques();

    echo "\n";
}


function batalha(Personagem $jogador1, Personagem $jogador2)
{
    limparTela();

    echo "========================================\n";
    echo "              BATALHA PVP\n";
    echo "========================================\n";

    echo $jogador1->nome . " VS " . $jogador2->nome . "\n";
    echo "\n";

    $turno = 1;

    while ($jogador1->estaVivo() && $jogador2->estaVivo()) {

        echo "\n";
        echo "========================================\n";
        echo "TURNO " . $turno . "\n";
        echo "========================================\n";

        $jogador1->mostrarStatus();
        $jogador2->mostrarStatus();

        echo "\n";
        echo "Vez de " . $jogador1->nome . "\n";
        echo "\n";

        $jogador1->mostrarAtaques();

        echo "\n";
        echo "Escolha seu ataque: ";
        $ataque = intval(lerTexto());

        while ($ataque < 1 || $ataque > 5) {
            echo "Ataque invalido. Escolha de 1 a 5: ";
            $ataque = intval(lerTexto());
        }

        $ataque = $ataque - 1;

        echo "\n";
        echo $jogador1->nome . " usou ";
        echo $jogador1->ataques[$ataque]["nome"];
        echo "!\n";

        $dano = $jogador1->atacar($ataque);

        $jogador2->receberDano($dano);

        if (!$jogador2->estaVivo()) {
            break;
        }

        echo "\n";
        echo "Pressione ENTER para continuar...";
        lerTexto();

        limparTela();

        echo "========================================\n";
        echo "              BATALHA PVP\n";
        echo "========================================\n";

        echo "Vez de " . $jogador2->nome . "\n";
        echo "\n";

        $jogador2->mostrarAtaques();

        echo "\n";
        echo "Escolha seu ataque: ";
        $ataque = intval(lerTexto());

        while ($ataque < 1 || $ataque > 5) {
            echo "Ataque invalido. Escolha de 1 a 5: ";
            $ataque = intval(lerTexto());
        }

        $ataque = $ataque - 1;

        echo "\n";
        echo $jogador2->nome . " usou ";
        echo $jogador2->ataques[$ataque]["nome"];
        echo "!\n";

        $dano = $jogador2->atacar($ataque);

        $jogador1->receberDano($dano);

        echo "\n";

        if (!$jogador1->estaVivo()) {
            break;
        }

        echo "Pressione ENTER para continuar...";
        lerTexto();

        $turno++;
    }

    echo "\n";
    echo "========================================\n";
    echo "              FIM DA BATALHA\n";
    echo "========================================\n";

    if ($jogador1->estaVivo()) {
        echo "VENCEDOR: " . $jogador1->nome . "\n";
    } else {
        echo "VENCEDOR: " . $jogador2->nome . "\n";
    }

    echo "========================================\n";

    echo "\nPressione ENTER para voltar ao menu...";
    lerTexto();
}


function iniciarJogo()
{
    while (true) {

        limparTela();

        mostrarTitulo();

        echo "\n";
        echo "1 - Iniciar batalha PVP\n";
        echo "2 - Ver personagens\n";
        echo "3 - Ver transformacoes\n";
        echo "4 - Sair\n";
        echo "\n";

        echo "Escolha uma opcao: ";
        $opcao = lerTexto();

        if ($opcao == 1) {

            limparTela();

            mostrarTitulo();

            echo "\n";
            echo "ESCOLHA O JOGADOR 1\n";

            mostrarPersonagens();

            echo "\n";
            echo "Digite o numero do personagem: ";
            $numero1 = intval(lerTexto());

            while ($numero1 < 1 || $numero1 > 10) {
                echo "Personagem invalido. Digite novamente: ";
                $numero1 = intval(lerTexto());
            }

            $jogador1 = escolherPersonagem($numero1);

            limparTela();

            mostrarTitulo();

            echo "\n";
            echo "ESCOLHA O JOGADOR 2\n";

            mostrarPersonagens();

            echo "\n";
            echo "Digite o numero do personagem: ";
            $numero2 = intval(lerTexto());

            while ($numero2 < 1 || $numero2 > 10) {
                echo "Personagem invalido. Digite novamente: ";
                $numero2 = intval(lerTexto());
            }

            $jogador2 = escolherPersonagem($numero2);

            batalha($jogador1, $jogador2);
        }

        else if ($opcao == 2) {

            limparTela();

            mostrarTitulo();

            mostrarPersonagens();

            echo "\n";
            echo "Escolha um personagem para ver os ataques: ";
            $numero = intval(lerTexto());

            while ($numero < 1 || $numero > 10) {
                echo "Numero invalido. Digite novamente: ";
                $numero = intval(lerTexto());
            }

            $personagem = escolherPersonagem($numero);

            limparTela();

            mostrarInformacoesPersonagem($personagem);

            echo "Pressione ENTER para voltar...";
            lerTexto();
        }

        else if ($opcao == 3) {

            limparTela();

            mostrarTitulo();

            $transformacoes = new Transformacoes();
            $transformacoes->mostrarTodas();

            echo "Pressione ENTER para voltar...";
            lerTexto();
        }

        else if ($opcao == 4) {

            echo "\n";
            echo "Obrigado por jogar\n";
            break;
        }

        else {
            echo "\n";
            echo "Opcao invalida!\n";
            echo "Pressione ENTER para continuar...";
            lerTexto();
        }
    }
}


iniciarJogo();