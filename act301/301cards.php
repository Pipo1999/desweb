<?php
require_once "Card.php";
$c1 = new Card("diamonds", "A", 13);
$c2 = new Card("spades", "A", 13);
$c3 = new Card("hearts", "A", 13);
$c4 = new Card("clubs", "A", 13);

$cards = [$c1, $c2, $c3, $c4];

require_once "301cards-view.php";