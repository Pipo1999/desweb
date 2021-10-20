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

    }

}

