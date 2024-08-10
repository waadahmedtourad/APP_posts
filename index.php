<?php
class Rectangle {
            private float $length = 1.0;
            private float $width = 1.0;
        
            
            public function __construct(float $len, float $wid) {
                $this->length = $len;
                $this->width = $wid;
            }
        
            
            public function setLength(float $len) : void {
                $this->length = $len;
            }
        
            public function getLength() : float {
                return $this->length;
            }
        
         
            public function setWidth(float $wid) : void {
                $this->width = $wid;
            }
        
            public function getWidth() : float {  
                return $this->width;
            }
        
            
            public function getArea() : float {
                return $this->length * $this->width;
            }
        
           
            public function getPerimeter() : float {
                return 2 * ($this->length + $this->width);
            }
        
           
            public function showRectangle() {
                echo "Length = " . $this->length . "<br>" ."Width = " . $this->width . "<br>" ."Area = " . $this->getArea() . "<br>" ."Perimeter = " . $this->getPerimeter() . "<br>";
            }
        }
        
       
        $rectangle = new Rectangle(5.0, 3.0);
        $rectangle->showRectangle();
        

?>