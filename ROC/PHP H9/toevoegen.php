<?php
  include "dhb.php";
  $query = "INSERT INTO broodjes;";
  //$result = $dhb->query($query);
  
?>

  <a href=".">terug</a>

  <h1>brood toevoegen</h1>
  <br>

  <form action="verwerken.php" method="post">
    
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
    <input type="submit" name="submit" value="toevoegen">
  </form>