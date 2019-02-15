<?php

include "circle.php";
include "comparable.php";

class ComparableCircle extends Circle implements iComparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius();
        $circleTwoRadius = $circleTwo->getRadius();

        if ($circleOneRadius > $circleTwoRadius) {
            return 1;
        }  else if($circleOneRadius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}