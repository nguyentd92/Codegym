
<?php

include_once ('circle.php');
include_once ('cylinder.php');
include_once ('rectangle.php');
include_once ('square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br /><br/>';

for ($i=0; $i < 3; $i++) {
    $percent = mt_rand(0,100);
    echo 'Resize percent: '.$percent.'%<br/><br/>';

    $circle->resize($percent);
    echo 'Circle area: ' . $circle->calculateArea() . '<br />';
    echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
    $cylinder->resize($percent);
    echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
    echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
    $rectangle->resize($percent);
    echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
    echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
    $square->resize($percent);
    echo 'Square area: ' . $square->calculateArea() . '<br />';
    echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br /><br/>';
}



