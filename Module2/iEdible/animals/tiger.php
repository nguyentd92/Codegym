
<?php
include_once(dirname( __FILE__ ) . '/../abstractclass/animal.php');
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }
}