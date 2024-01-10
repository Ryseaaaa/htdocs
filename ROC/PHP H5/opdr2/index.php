<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <form class="imagecontainer" action="resultaat.php" method="POST">
      <?php include "imagecollect.php";?>
      <input type="submit" name="submitbutton" value="Submit"/>
    </form>
  </body>
</html>
