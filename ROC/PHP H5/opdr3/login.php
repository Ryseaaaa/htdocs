<?php


$users = array(
  "piet@worldonline.nl" => "doetje123",
  "klaas@carpets.nl" => "snoepje777",
  "truushendriks@wegweg.nl" => "arkiearkie201"
);
echo checkLogin($users);

function checkLogin($users){
  foreach ($users as $email => $pass){
    if($_POST["email"] == $email){
      if($_POST["password"] == $pass){
        return "Logged in as $email";
      }else{
        return "Password Incorrect";
      }
    }
  }
  return "No matching email found";
}
?>