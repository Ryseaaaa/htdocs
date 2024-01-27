<?php

  $autobroodnaam;
  $automeel;
  $autovorm;
  $autogewicht;


  
  function manualform(){
    form("","","","");
  }

  function autoform(){
    form($_GET["broodnaam"],$_GET["meel"],$_GET["vorm"],$_GET["gewicht"]);
  }

  function form($autobroodnaam,$automeel,$autovorm,$autogewicht){echo "
  <h1>Vul hier de waarden in van het brood wat bewerkt moet worden:</h1>
  <p>Dit moet exact zijn, klik in overzicht op een naam om automatisch in te vullen</p>
  <label for=\"selectnaam\">Brood Naam</label>
    <input type=\"text\" id=\"selectnaam\" name=\"selectbroodnaam\" value=\"$autobroodnaam\">
  <br>
    <label for=\"selectinputmeel\">Meel Soort</label>
    <input type=\"text\" id=\"selectinputmeel\" name=\"selectmeel\" value=\"$automeel\">
  <br>
    <label for=\"selectinputvorm\">Vorm</label>
    <input type=\"text\" id=\"selectinputvorm\" name=\"selectvorm\" value=\"$autovorm\">
  <br>
    <label for=\"selectinputgewicht\">Gewicht</label>
    <input type=\"text\" id=\"selectinputgewicht\" name=\"selectgewicht\" value=\"$autogewicht\">
  <br>
  ";
  }
?>

<form action="../verwerken.php" method="post">
    
<?php
  if(count($_GET) == 0){
    echo "<a href=\".\">Terug</a>";
    manualform();
  }else{
    echo "<a href=\"../overzicht.php\">Terug</a>";
    autoform();
  }
?>


  <h1>Vul hier de nieuwe waarden in:</h1>
  <p>(Niet ingevulde velden veranderen niet)</p>
    <label for="inputnaam">Brood Naam</label>
    <input type="text" id="inputnaam" name="broodnaam" value="">
  <br>
    <label for="inputmeel">Meel Soort</label>
    <input type="text" id="inputmeel" name="meel" value="">
  <br>
    <label for="inputvorm">Vorm</label>
    <input type="text" id="inputvorm" name="vorm" value="">
  <br>
    <label for="inputgewicht">Gewicht</label>
    <input type="text" id="inputgewicht" name="gewicht" value="">
  <br>
  <input type="submit" name="submit" value="bewerken">
</form>