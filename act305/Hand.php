<?php
class hand extends CardCollection {
    function play(): Card {
        return array_shift($this->cards);
    }
}