<?php
unset($_POST["knop"]);
$missinginput = false;

  foreach($_POST as $input){
    if ($input == "" || $missinginput){
      $missinginput = true;
      
    }
  }

  if ($missinginput){
    include "form.html";
    echo "<p>Niet alle velden waren ingevuld.</p>";
  }else{
    foreach($_POST as $key => $input){
      echo "<p>".ucfirst($key).": ".$input."</p>";
    }
  }

  
