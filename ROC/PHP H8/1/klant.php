<?php
class Klant{
  private $bankrekening = 0;
  public function stortGeld($aantal){
    if($aantal > 0){
      $this->bankrekening += $aantal;
      echo "<p>Er is $aantal gestort, de bankrekening bedraagt nu $this->bankrekening</p>";
    }else{
      echo "<p>U kunt niet $aantal storten. Transactie geannuleerd.</p>";
    }
  }
}

$piet = new Klant();
$piet->stortGeld(20);
$piet->stortGeld(20);
$piet->stortGeld(60);