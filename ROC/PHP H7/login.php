<?php
  session_start();
  if(checkInputs()){
    if(loginSucces()){
      header("Location: main.php");
    }else{
      include "loginForm.php";
      echo "<p>Login failed.</p>";
    }
  }else{
    include "loginForm.php";
    echo "<p>Not all fields were filled in.</p>"; 
  }

function loginSucces(){
  include "connectDB.php";
  $users = ($dhb->query("SELECT * FROM users"));
  
  
  foreach($users as $user){
    //print_r($user);
    //exit();
    
    if($_POST["username"] == $user["user"] && $_POST["password"] == $user["pass"]){
      $_SESSION["loggedIn"] = true;
      $_SESSION["USER"] = $user["user"];
      $_SESSION["isAdmin"] = $user["isAdmin"];
      return true;
    }

  }

  return false;
}

function checkInputs(){
  foreach($_POST as $field => $value){
    if($value == ""){
      return false;
    }
  }
  return true;
}
?>