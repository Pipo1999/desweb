<?php

require "Card.php";
require "CardCollection.php";

$cardCollection=new CardCollection();

$suits = ["hearts", "diamonds", "spades", "clubs"];

$symbols = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

$values = [14, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

foreach ($suits as $suit) {
    foreach ($symbols as $key=>$symbol){
        $cardCollection->addCard(new Card($suit, $symbol,$values[$key]));
    }
}

/*
$cards[] = new Card("Cors", "8",8);
$cards[] = new Card("Diamants","A", 13);
$cards[] = new Card("Trèbols","3",3);
$cards[] = new Card("Piques", "8",8);
$cards[] = new Card("Cors","A", 13);
$cards[] = new Card("Trèbols","A",3);

$cardCollection=new CardCollection();
$cardCollection->add($cards);
$cardCollection->addCard(new Card("Cors", "Q", 11));

var_dump($cardCollection->getCards());
*/

//var_dump(count($cardCollection->getCards()));
$cardCollection->shuffle();

require "index.view.php";