<?php

function celsiusfahrenheit(){
  $celsius = random_int(0,100);
  $fahrenheit = ($celsius * 1.8) + 32;
  echo $celsius." C is ".$fahrenheit." F";
}

celsiusfahrenheit();





echo "<br>";

function candivide3($input){
  if($input % 3 == 0){
    return true;
  }else{
    return false;
  }
}

$number = random_int(0,100);
echo "The number ".$number." can ";

if(!candivide3($number)){
  echo "not ";
}
echo "be divided by 3";

echo "<br>";
function reversestring($string){
  return strrev($string);
}

echo "Hello world backwards is ".reversestring("Hello world");