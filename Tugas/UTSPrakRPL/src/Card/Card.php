<?php
namespace src\Card;

class Card {
    private string $number;
    private string $suit;

    /**
     * Card constructor.
     * @param string $number
     * @param string $suit
     */
    public function __construct(string $number, string $suit)
    {
        $this->number = $number;
        $this->suit = $suit;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @param Card $card
     * @return bool
     */
    public function isInMatchingSet(Card $card): bool
    {
        return ($this->getNumber() === $card->getNumber());
    }
}

