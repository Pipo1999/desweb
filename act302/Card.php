<?php
class Card {
    private string $suit;
    private string $symbol;
    private int $value;

    public function __construct(string $suit, string $symbol, int $value)
    {

        $this->suit = $suit;
        $this->symbol = $symbol;
        $this->value = $value;
    }

    public function show()
    {

        echo $this->suit;
        echo $this->symbol;
        echo $this->value;
    }

    /* @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /* @param string $suit
     */
    public function setSuit(string $suit): void
    {
        $this->suit = $suit;
    }

    /* @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /* @param string $symbol
     */
    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    /* @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /* @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}

require_once "302cards.php";