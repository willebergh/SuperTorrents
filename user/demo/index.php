<?php
  session_start();
  if (empty($_SESSION['authenticated'])) {
    echo "
      <h1>not logged in</h1>
    ";
  } else if ($_SESSION['authenticated'] == true) {
    echo "
      <h1>Welcome home @ ".$_SESSION['username']."</h1>
      ";
  } else {
    echo "
      <h1>not logged in</h1>
    ";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
  </head>
  <body>
    <a href="./login.php">login</a>
    <a href="./logout.php">logout</a>
  </body>
</html>
