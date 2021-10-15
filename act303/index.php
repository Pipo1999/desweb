<?php

require "Card.php";

$suit = ["Diamantes", "Corazones", "Picas", "Tréboles"];
$symbol = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];

for ($i = 0; $i < count($suit); $i++) {
    for ($j = 0; $j < count($symbol); $j++) {
        $cards[] = new Card($suit[$i], $symbol[$j], $j);
    }
}

shuffle($cards);

require "index.view.php";
