<?php

class CardCollection
{
    private $cards;

    public function add(array $cards) {
        $this->cards[] = $cards;
    }

    public function addCard(Card $card) {
        $this->cards[] = $card;
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    public function  shuffle() {
        shuffle($this -> cards);
    }
}