<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Shape {
            protected $name;

            public function __construct($name)
            {
                $this->name = $name;
            }

            public function show(){
                return "I'm a shape. My name is $this->name";
            }
        }

        class Circle extends Shape {
            public $radius;

            public function __construct($name,$radius) {
                parent::__construct($name);
                $this->radius = $radius;
            }

            public function calculateArea() {
                return pi() * pow($this->radius, 2);
            }

            public function calculatePerimeter(){
                return pi()*$this->radius*2;
            }
        }

        class Cylinder extends Circle {
            public $height;

            public function __construct($name,$radius,$height) {
                parent::__construct($name,$radius);
                $this->height = $height;
            }

            public function calculateArea() {
                return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
            }

            public function calculateVolume(){
                return parent::calculateArea()*$this->height;
            }
        }

        class Rectangle extends Shape {
            public $width;
            public $height;

            public function __construct($name, $width, $height) {
                parent::__construct($name);
                $this->width = $width;
                $this->height = $height;
            }

            public function calculateArea() {
                return $this->width * $this->height;
            }

            public function calculatePerimeter() {
                return ($this->width + $this->height) * 2;
            }
        }

        class Square extends Rectangle {            
            public function __construct($name, $width) {
                parent::__construct($name, $width, $width);               
            }
        }

        $circle = new Circle('Circle 01', 3);
        echo 'Circle area: ' . $circle->calculateArea() . '<br />';
        echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

        $cylinder = new Cylinder('Cylinder 01', 3 , 4);
        echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
        echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

        $rectangle = new Rectangle('Rectangle 01', 3 , 4);
        echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
        echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

        $square = new Square('Square 01', 20);
        echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
        echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
    ?>
</body>
</html>