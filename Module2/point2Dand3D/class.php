<?php
    class Point2D {
        public $x;
        public $y;

        public function __construct($x = 0.0,$y = 0.0) {
            $this->x = $x;
            $this->y = $y;
        }

        public function getX() { return $this->x; }
        public function setX($x) { $this->x = $x; }

        public function getY() { return $this->y; }
        public function setY($y) { $this->y = $y; }

        public function getXY() { return array($this->x,$this->y); }
        public function setXY($x,$y) { $this->x = $x; $this->y = $y;}

        public function toString() {return "($this->x,$this->y)"; }
    }

    class Point3D extends Point2D {
        private $z;

        public function __construct($x = 0.0,$y = 0.0,$z = 0.0) {
            parent::__construct($x,$y);
            $this->z = $z;
        }

        public function getZ() { return $this->z; }
        public function setZ($z) { $this->z = $z; }

        public function getXYZ() { return array($this->x,$this->y,$this->z); }
        public function setXYZ($x,$y,$z) { $this->x = $x; $this->y = $y; $this->z = $z; }

        public function toString() { return "($this->x,$this->y,$this->z)"; }
    }
?>