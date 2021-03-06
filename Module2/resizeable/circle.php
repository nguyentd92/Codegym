
<?php

include_once ('shape.php');
class Circle extends Shape implements iResizeable
{
    private $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }

    public function resize($percent){
        $this->radius *= sqrt($percent/100 + 1);
    }
}