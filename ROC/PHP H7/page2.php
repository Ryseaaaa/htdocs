<?php
session_start();
if(!$_SESSION["isAdmin"]){
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
  YAAAAAY YOURE AN ADMIN YPIIEEE
</body>
</html>