<?php
   class Mouse{
      public function __construct(
         public $color, 
         public $isOn, 
         public $pointerX, 
         public $pointerY,
         private $isConnected, 
         private $leftClick, 
         private $rightClick
         ) {}

      public function getColor(){
         return $this->color;
      }

      public function getIsOn(){
         return $this->isOn;
      }

      public function setIsOn(){
         if(!$this->isOn){
            return "Mouse is on";
         } else {
            return "Mouse is off";
         }
      }

      public function getPointerX(){
         return $this->pointerX;
      }

      public function getPointerY(){
         return $this->pointerY;
      }

      public function setPointers($x, $y){
         $this->pointerX += $x;
         $this->pointerY += $y;
         return "X: ". $this->pointerX . " -- " . "Y: " . $this->pointerY;
      }

      public function getIsConnected(){
         return $this->isConnected;
      }

      public function setIsConnected(){
         if(!$this->isConnected){
            return "Mouse is connected";
         } else {
            return "Mouse is disconnected";
         }
      }

      public function getLeftClick(){
         return $this->leftClick;
      }

      public function getRightClick(){
         return $this->rightClick;
      }
   }

   $mouse = new Mouse(0, false, 400, 100, false, true, false);
   $color = $mouse->getColor();
   $isOn = $mouse->setIsOn();
   $setPointers = $mouse->setPointers($x, $y);
   $isConnected = $mouse->setIsConnected();
   $leftClick = $mouse->getLeftClick();
   $rightClick = $mouse->getRightClick();

   echo "<h3>Mouse</h3>";
   echo "Model color: " . ($color ? "White" : "Black") . "<br>";
   echo "Power: " . $isOn . "<br>";
   echo "Status: " . $isConnected . "<br>";
   echo "Cursor Position: " . $setPointers . "<br>";
   echo "Left Click: " . ($leftClick ? "Active" : "Not Active") . "<br>";
   echo "Right Click: " . ($rightClick ? "Active" : "Not Active") . "<br>";
?>