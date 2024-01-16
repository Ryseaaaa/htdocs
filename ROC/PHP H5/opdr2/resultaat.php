<?php

foreach($_POST as $img => $isOn){
  if($isOn == "on"){
    $path = str_replace("_",".",substr($img,7));
    echo "<img src=\"img/$path\">";
  }
  //echo "<img class=\"imageUnselected\" id=\"".$img."\" onclick=\"selectImage('".$img."')\" value=\"\" src=\"img/".$img."\">";
}
  
