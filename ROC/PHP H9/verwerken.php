<?php 
$bewerkingsoort = $_POST["submit"];

if($bewerkingsoort == "toevoegen"){
  toevoegen();
}elseif ($bewerkingsoort == "bewerken") {
  bewerken();
}else {
  foutmelding("bewerkingssoort klopt niet");
}



function foutmelding($fout){
  echo "<h1>fout: $fout</h1>";
  exit;
}

function toevoegen(){
  //controleer data
  foreach($_POST as $veld => $waarde){
    if($waarde == ""){
      foutmelding("Niet alle velden waren ingevuld");
    }
    $$veld = $waarde;
  }

  foreach(array($broodnaam,$meel,$vorm) as $waarde){
    if(ctype_alpha(str_replace(' ', '', $waarde)) === false){
      foutmelding("\"".$waarde."\" must contain only letters and spaces!");
    }
  }
  
  if(ctype_digit($gewicht) === false){
    foutmelding("\"$gewicht\" mag alleen hele getallen bevatten");
  }


  //assemble query
  $query = "INSERT INTO broodjes VALUES(
  \"$broodnaam\",
  \"$meel\",
  \"$vorm\",
  $gewicht
  );";

  //connect DHB and run query
  include "dhb.php";
  $dhb->query($query);

  echo "
  <h1>Nieuw brood toegevoegd:</h1>
  <p>$broodnaam</p>
  <p>$meel</p>
  <p>$vorm</p>
  <p>$gewicht</p>
  ";
}

function bewerken(){
  //controleer data
  foreach($_POST as $veld => $waarde){
    $$veld = $waarde;
    if($waarde == ""){
      //foutmelding("Niet alle velden waren ingevuld");
    }
  }
  foreach(array($selectbroodnaam,$selectmeel,$selectvorm,$selectgewicht) as $oud){
    if($oud == ""){
      foutmelding("Niet alle velden waren ingevuld");
    }
  }

  /*
  foreach(array($broodnaam,$meel,$vorm) as $waarde){
    if(ctype_alpha(str_replace(' ', '', $waarde)) === false){
      foutmelding("\"".$waarde."\" must contain only letters and spaces!");
    }
  }
  
  if(ctype_digit($gewicht) === false){
    foutmelding("\"$gewicht\" mag alleen hele getallen bevatten");
  }
  */
}