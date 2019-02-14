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
        require 'class.php';

        $circle = new Circle(3,'red');
        $cylinder = new Cylinder(3,'blue',2);

        echo $circle->radius.' '.$circle->color.' '.$circle->area;
        echo "<br/>";
        echo $cylinder->calculateArea().'  '.$cylinder->calculateVolume();
    ?>
</body>
</html>