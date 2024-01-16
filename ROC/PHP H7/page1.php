<?php
session_start();
if(!$_SESSION["loggedIn"]){
  header("Location: denied.php");
  exit();
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
  Yay! You're logged in and can view this page
</body>
</html>