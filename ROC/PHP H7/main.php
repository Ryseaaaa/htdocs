<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  session_start(); 
  echo "<p>You are logged in as ".$_SESSION["USER"]."</p>"; 
  echo "<p><a href=\"logout.php\">Log Out</a></p>";
  echo "<p><a href=\"page1.php\">page1</a></p>";

  if ($_SESSION["isAdmin"]){
    echo "<p><a href=\"page2.php\">page2</a></p>"; 
  }
  ?>

</body>
</html>
