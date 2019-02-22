
<?php

include_once ('circle.php');
include_once ('cylinder.php');
include_once ('rectangle.php');
include_once ('square.php');

$shapes[0] = new Circle('Circle 01', 3);
$shapes[1] = new Cylinder('Cylinder 01', 3 , 4);
$shapes[2] = new Rectangle('Rectangle 01', 3 , 4);
$shapes[3] = new Square('Square 01', 4 , 4, 4);

foreach ($shapes as $shape) {
    if ($shape instanceof Cylinder) {
        $typeShape = 'Cylinder';
    } else if ($shape instanceof Square) {
        $typeShape = 'Square';        
    } else if ($shape instanceof Rectangle) {
        $typeShape = 'Rectangle';
    } else if ($shape instanceof Circle) {
        $typeShape = 'Circle';
    }
    echo $typeShape." area: ". $shape->calculateArea() . "<br />";
    echo $typeShape." perimeter: ". $shapes[0]->calculatePerimeter() . "<br />";
};

echo "<br/>";

foreach ($shapes as $shape) {
    echo "Shape area: ".$shape->calculateArea().'<br/>';
    if ($shape instanceof iColorable) {
        echo $shape->howToColor()."<br/>";
        
    }
    echo "<br/>";
}



