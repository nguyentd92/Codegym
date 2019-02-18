
<?php

include_once ('circle.php');
include_once ('cylinder.php');
include_once ('rectangle.php');
include_once ('square.php');

$shapes[0] = new Circle('Circle 01', 3);
echo 'Circle area: ' . $shapes[0]->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $shapes[0]->calculatePerimeter() . '<br />';
$shapes[1] = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $shapes[1]->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $shapes[1]->calculatePerimeter() . '<br />';
$shapes[2] = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $shapes[2]->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $shapes[2]->calculatePerimeter() . '<br />';
$shapes[3] = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $shapes[3]->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $shapes[3]->calculatePerimeter() . '<br /><br/>';

foreach ($shapes as $shape) {
    echo "Shape area: ".$shape->calculateArea().'<br/>';
    if ($shape instanceof iColorable) {
        echo $shape->howToColor()."<br/>";
        
    }
    echo "<br/>";
}



