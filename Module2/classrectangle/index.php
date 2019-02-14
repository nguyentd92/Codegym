<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <?php
        class Rectangle {
            public $width;
            public $height;

            public function __construct($width,$height)
            {
                $this->width = $width;
                $this->height = $height;
            }

            //tinh dien tich
            public function getArea()
            {
            return $this->width * $this->height;
            }

            //tinh chu vi
            public function getPerimeter()
            {
            return (($this->width + $this->height) * 2);
            }

            public function display()
            {
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
            }
        };
        
        $width = 10;
        $height = 20;
        $rectangle = new Rectangle($width, $height);

        echo '<br/>'.$rectangle->width; // 0utput: 10
        echo '<br/>'.$rectangle->height; // 0utput: 20

        $rectangle->height = 30;
        $rectangle->width = 20;

        echo '<br/>'.$rectangle->height; // 0utput: 30
        echo '<br/>'.$rectangle->width; // 0utput: 20
        echo '<br/>'.$rectangle->getPerimeter(); // 0utput: 100
        echo '<br/>'.$rectangle->getArea(); // Output: 600
        echo '<br/>'.("Your Rectangle". $rectangle->display());
    ?>
</body>
</html>