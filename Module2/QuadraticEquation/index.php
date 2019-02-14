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

            public function getRoot() {
                try {
                    echo "Delta = ".$this->getDiscriminant()."<br/>";
                    if ($this->getDiscriminant() < 0) {
                        throw new Exception('Phương trình vô nghiệm');
                    };
        
                    if ($this->getDiscriminant() ==0) {
                        return "Phương trình có nghiệm kép ".$this->getRoot1();
                    } else {
                        return "Phương trình có 2 nghiệm ".$this->getRoot1()." và ".$this->getRoot2();
                    }
                } catch (Exception $e) {
                    return $e->getMessage();
                }
            }

        }

        $tinh = new QuadraticEquation(2.5,4,2);

        echo $tinh->getRoot();
        
    ?>
</body>
</html>