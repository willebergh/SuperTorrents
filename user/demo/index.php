<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
  </head>
  <body>
    <?php
      session_start();
      echo "
      ".$_SESSION['loggedin']." </br>
      ".$_SESSION['username']."
    "; ?>
    <?php echo ""; ?>
    <h1>Welcome home</h1>
    <a href="./login.php">login</a>
    <a href="./logout.php">logout</a>
  </body>
</html>
