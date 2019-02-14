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
        class Fan {
            const SLOW = 1;
            const MEDIUM = 2;
            const FAST = 3;

            private $speed = self::SLOW;
            private $on = false;
            private $radius = 5;
            private $color = "blue";

            public function __construct(){
                
            }

            public function __get($propertyName) {
                return $this->$propertyName;
            }

            public function __set($propertyName, $propertyValue) {
                $this->$propertyName = $propertyValue;
            }

            public function setSpeed($mode) {
                switch ($mode)
                {
                    case "FAST":
                        $this->speed = self::FAST;
                        break;
                    case "MEDIUM":
                        $this->speed = self::MEDIUM;
                        break;
                    case "SLOW":
                        $this->speed = self::SLOW;
                        break;
                }

            }

            public function toString() {
                if ($this->on) {
                    return $this->speed.' '.$this->color.' '.$this->radius.' '.'fan is on';
                } else {
                    return $this->color.' '.$this->radius.' '.'fan is off';
                }
            }
        };

        $fan1 = new Fan();
        $fan1->setSpeed('FAST');
        $fan1->__set('radius',10);
        $fan1->__set('color','yellow');
        $fan1->__set('on',true);

        $fan2 = new Fan();
        $fan2->setSpeed('MEDIUM');
        $fan2->__set('radius',5);
        $fan2->__set('color','blue');
        $fan2->__set('on',false);

        echo $fan1->toString();
        echo "<br/>";
        echo $fan2->toString();
    ?>
</body>
</html>