<?php
include_once(dirname( __FILE__ ) . '/../abstractclass/animal.php');
include_once(dirname( __FILE__ ) . '/../interfaceclass/edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}