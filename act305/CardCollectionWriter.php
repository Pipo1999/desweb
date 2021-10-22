<?php
class CardCollectionWriter {
    public function write(CardCollection $cardDeck) {
        foreach ($cardDeck->getCards() as $card) {
            echo sprintf("<div>%s - %s </div>", $card->getSymbol(), $card->getSuit());
        }
    }
}
?>