<?php
    include_once(dirname( __FILE__ ) . '/../abstractclass/fruit.php');

    class Orange extends Fruit {
        public function howToEat() {
            return "Orange could be juiced";
        }
    }
?>