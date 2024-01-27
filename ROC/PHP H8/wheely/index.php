<?php


  class Auto{
    public $merk;
    public $type;
    public $prijs;
    public $url;
  }

  $autos = array();

  $automerk = array(
    "bmw",
    "volkswagen",
    "mazda",
    "nissan",
    "subaru"
  );

  $autotype = array(
    "sedan",
    "coupe",
    "hatchback",
    "suv",
    "mpv"
  );


  foreach($automerk as $genmerk){ 
    foreach($autotype as $gentype){ 
      $genprijs = 1000*random_int(10,50)-10;
      $genurl = $genmerk.$gentype;

      $genauto = new Auto;
      $genauto->merk = $genmerk;
      $genauto->type = $gentype;
      $genauto->prijs = $genprijs;
      $genauto->url = $genurl;
      array_push($autos,$genauto);

    }
  }
  

  function carlist($autos) {
    if (count($_GET) != 0){
      echo "<h1>SEARCH</h1>";
      foreach($autos as $auto){
        if(
          ($auto->merk == $_GET["merk"] || $_GET["merk"] == "all" || !isset($_GET["merk"])) &&
          ($auto->type == $_GET["type"] || $_GET["type"] == "all" || !isset($_GET["type"])) &&
          ($auto->prijs >= $_GET["minprijs"] || !isset($_GET["minprijs"]) || $_GET["minprijs"] == "" ) &&
          ($auto->prijs <= $_GET["maxprijs"] || !isset($_GET["maxprijs"]) || $_GET["maxprijs"] == "")
        ){
          echo "<p>$auto->merk | $auto->type | $$auto->prijs,-</p>";
        }
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>autos</h1>
  <form id="carsearch" action="" method="get">
    <label for="minprijs">Min. Prijs</label>
    <input type="text" name="minprijs" id="minprijs" value="">
    <label for="maxprijs">Max. Prijs</label>
    <input type="text" name="maxprijs" id="maxprijs" value="">

    <label for="merkselect">Merk</label>
    <select name="merk" form="carsearch" id="merkselect">
      <option value="all">Alle</option>
      <?php foreach($automerk as $merk){echo "<option value=\"$merk\">".ucfirst($merk)."</option>";}?>
    </select>

    <label for="typeselect">Type</label>
    <select name="type" form="carsearch" id="typeselect">
      <option value="all">Alle</option>
      <?php foreach($autotype as $type){echo "<option value=\"$type\">".ucfirst($type)."</option>";}?>
    </select> 

    <input type="submit" value="Zoek">
  </form>
  
  <?php carlist($autos); ?>

</body>
</html>

<?php
//search using form
  //include all results as form

//if not searching, include all