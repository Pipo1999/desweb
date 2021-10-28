<?php

class CardCollection
{
    private array $cards;

    function add(array $array)
    {
        //$this->cards = $array;
        foreach($array as $card) {
            $this->addCard($card);
        }
    }

    function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    function shuffle() {
        shuffle($this->cards);
    }

    function getCards(): array {
        return $this->cards;
    }
/*
    function writer() {
        foreach ($this->cards as $card) {
            echo "<p>" . $card->getSymbol() . " of " . $card->getSuit() . "</p>";
            }
        }
    }
*/
    function deal() {
        $cont = 0;
        $auxJ1 = [];
        $auxJ2 = [];

        echo "<p style='font-size: 20px;'>Jugador 1</p>";
        foreach ($this->cards as $card) {
            if ($cont <= 4) {
                echo "<img alt='imagenes' width='100' style='margin: 4px;' src='cards/" . $card->getSymbol() . '_of_' . $card->getSuit() . ".svg' />";
                $auxJ1[$cont] = $card->getValue();
                $cont++;
            } elseif ($cont > 4 && $cont < 10) {
                if ($cont == 5){echo "<p style='font-size: 20px;'>Jugador 2</p>";}
                echo "<img alt='imagenes' width='100' style='margin: 4px;' src='cards/" . $card->getSymbol() . '_of_' . $card->getSuit() . ".svg' />";
                $auxJ2[$cont] = $card->getValue();
                $cont++;
            }
        }

        $cont = 0;
        echo "<br>";
        for ($i = 0; $i < 5; $i++) {
            if ($auxJ1[$i] > $auxJ2[$i+5]) {
                echo "<a>|->Gana el <strong style='color: green'>J1</strong><-| </a>";
                $cont++;
            } elseif ($auxJ1[$i] != $auxJ2[$i+5]) {
                echo "<a>|->Gana el <strong style='color: green'>J2</strong><-| </a>";
                $cont--;
            } else {
                echo "<strong style='color: green'>|.-->Empate<--| </strong>";
            }
        }

        if ($cont > 0) {
            echo "<h1>Ha ganado el Jugador 1</h1>";
        } elseif ($cont < 0) {
            echo "<h1>Ha ganado el Jugador 2</h1>";
        } else {
            echo "<h1>Ha habido un empate entre ambos jugadores</h1>";
        }
    }
}
