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
        class QuadraticEquation {
            private $a;
            private $b;
            private $c;

            function __construct($a, $b, $c) {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }

            public function get_a(){
                return $this->a;
            }

            public function get_b(){
                return $this->b;
            }

            public function get_c(){
                return $this->c;
            }

            public function getDiscriminant(){
                return pow($this->b,2) - 4 * $this->a * $this->c;
            }

            public function getRoot1(){
                return (-($this->b) + sqrt($this->getDiscriminant())) / 2*$this->a;
            }

            public function getRoot2(){
                return (-$this->b - sqrt($this->getDiscriminant())) / 2*$this->a;
            }

        }

        $tinh = new QuadraticEquation(2.5,4,2);

        try {
            echo "Delta = ".$tinh->getDiscriminant()."<br/>";
            if ($tinh->getDiscriminant() < 0) {
                throw new Exception('Phương trình vô nghiệm');
            };

            if ($tinh->getDiscriminant() ==0) {
                echo "Phương trình có nghiệm kép ".$tinh->getRoot1();
            } else {
                echo "Phương trình có 2 nghiệm ".$tinh->getRoot1()." và ".$tinh->getRoot2();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    ?>
</body>
</html>