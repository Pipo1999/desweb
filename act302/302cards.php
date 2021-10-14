<?php
require "Card.php";
require "CardCollection.php";
$c1 = new Card("diamonds", "A", 13);
$c2 = new Card("spades", "A", 13);
$c3 = new Card("hearts", "A", 13);
$c4 = new Card("clubs", "A", 13);
$c5 = new Card("spades", "Q", 12);
$cards = [$c1, $c2, $c3, $c4, $c5];
shuffle($cards);

$cardsColl = new CardCollection();
$cardsColl -> add($cards);
$cardsColl -> addCard($c5);

require "302cards-view.php";