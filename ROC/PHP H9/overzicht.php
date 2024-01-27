<?php
  include "dhb.php";
  $query = "SELECT * FROM broodjes;";
  $result = $dhb->query($query);
  
?>

  <a href=".">terug</a>

  <table>
    <tr>
      <th>Naam</th>
      <th>Meel</th>
      <th>Vorm</th>
      <th>Gewicht</th>
    </tr>

    <?php
    foreach($result as $brood){
      echo "<tr>";
        echo "<td><a href=\"bewerken.php/?broodnaam=".$brood["broodnaam"]."&meel=".$brood["meel"]."&vorm=".$brood["vorm"]."&gewicht=".$brood["gewicht"]."\">".$brood["broodnaam"]."</a></td>";
        echo "<td>".$brood["meel"]."</td>";
        echo "<td>".$brood["vorm"]."</td>";
        echo "<td>".$brood["gewicht"]."g</td>";
      echo "</tr>";
    }
    ?>
  </table> 
  
