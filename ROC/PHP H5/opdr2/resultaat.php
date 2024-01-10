<?php
print_r($_POST);
  foreach($_POST as $img){
    echo "<img class=\"imageUnselected\" id=\"".$img."\" onclick=\"selectImage('".$img."')\" value=\"\" src=\"img/".$img."\">";
  }
  
