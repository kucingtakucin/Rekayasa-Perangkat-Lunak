<?php
namespace CardTest;

use src\Card\Card;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase {
    private Card $card;

    /**
     * @inheritdoc
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->card = new Card('4', 'spades');
    }

    /**
     * @return void
     */
    public function testGetNumber(): void
    {
        $actualNumber = $this->card->getNumber();
        $this->assertEquals(4, $actualNumber,
            'Number should be <4>');
    }

    /**
     * @return void
     */
    public function testGetSuit(): void
    {
        $actualSuit = $this->card->getSuit();
        $this->assertEquals('spades', $actualSuit,
            'Suit should be <spades>');
    }

    /**
     * @return void
     */
    public function testIsInMatchingSet(): void
    {
        $matchingCard = new Card('4', 'hearts');
        $this->assertTrue($this->card->isInMatchingSet($matchingCard),
            '<4 of Spades> should match <4 of Hearts>');
    }

    /**
     * @return void
     */
    public function testIsNotInMatchingSet(): void
    {
        $matchingCard = new Card('5', 'hearts');
        $this->assertFalse($this->card->isInMatchingSet($matchingCard),
            '<4 of Spades> should not match <5 of Hearts');
    }
}