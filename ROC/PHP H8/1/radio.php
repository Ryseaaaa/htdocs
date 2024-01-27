<?php
class radioProgramma{
  private $naam = "BCFM";
  private $omschrijving = "The playlist with all of your musical needs satisfied.";
  private $nummers = array (
    "Mystery Circles Ultra",
    "Nuclear Star",
    "all the joy in life was gone once you left"
  );

  public function getNummers(){
    return $this->nummers;
  }

  public function getProgramma($type){
    return $this->$type;
  }
} 

$programma1 = new radioProgramma();
?>
<h1><?php echo $programma1->getProgramma("naam");?></h1>
<p><?php echo $programma1->getProgramma("omschrijving");?></p>
<p>Songlist:</p>
<?php 

foreach($programma1->getNummers() as $nummer){
  echo "<li>$nummer</li>";
}