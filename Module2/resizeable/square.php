<?php

include_once ('rectangle.php');
class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}