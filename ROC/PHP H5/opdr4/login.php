<?php


$users = array(
  "piet@worldonline.nl" => "doetje123",
  "klaas@carpets.nl" => "snoepje777",
  "truushendriks@wegweg.nl" => "arkiearkie201"
);
if(checkLogin($users)){
  echo "Logged in succesfully.";
}else{
  echo "Login failed.";
}

function checkLogin($users){
  foreach ($users as $email => $pass){
    if($_POST["email"] == $email){
      if($_POST["password"] == $pass){
        return true;
      }else{
        return false;
      }
    }
  }
  return false;
}
?>