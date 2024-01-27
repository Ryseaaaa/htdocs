<?php
  class Auto {
    private $wheels = 0;
    public function speedup(){
      $this->wheels++;
    } 
    public function gas(){
      for($i = 0; $i < $this->wheels; $i++){
        echo "VROOM";
      }
    }
  }

  $auto = new Auto();
for($i = 0; $i < 10; $i++){
  echo "<br>";
  $auto->gas();
  $auto->speedup();
}