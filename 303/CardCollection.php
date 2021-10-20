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

    function writer() {
        foreach ($this->cards as $card) {
            echo "<p>" . $card->getSuit() . $card->getSymbol() . "</p>";
        }
    }

    function imagenes() {
        foreach ($this->cards as $card) {
            echo "<img alt=\"imagenes\" src=\"cards/" . $card->getSymbol() . "_of_" . $card->getSuit() . ".svg\" />";
        }
    }
}

