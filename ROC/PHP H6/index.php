<?php

$dhb;

try{

$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = 'phpschool';


$dhb = new PDO(
  "mysql:host=$host;dbname=$db;port=$port",
  $user,
  $pass
);

}catch(PDOException $e){
  echo $e->getMessage();
}

echo "
<table>
  <tr>
    <th>cursistnr</th>
    <th>naam</th>
    <th>roepnaam</th>
    <th>straat</th>
    <th>postcode</th>
    <th>plaats</th>
    <th>geslacht</th>
    <th>geb_datum</th>
  </tr>
";

foreach($dhb->query("SELECT * FROM cursist") as $entry){
  echo "<tr>";
  for($i = 0; $i < 8; $i++){
    echo "<td>".$entry[$i]."</td>";
  }
  echo "</tr>";
}