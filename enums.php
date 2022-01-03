<?php

enum Suit {
  case Hearts;
  case Diamonds;
  case Clubs;
  case Spades;
}

function pick_a_card(Suit $suit) {  }
 
$val = Suit::Diamonds;
 
$val2 = Suit::Clubs;
 
pick_a_card($val);        // OK
pick_a_card(Suit::Clubs); // OK
// pick_a_card('Spades');    // TypeError: pick_a_card(): Argument #1 ($suit) must be of type Suit, string given

print Suit::Spades->name;

// echo $val instanceof Suit;

// echo $val === $val2;
