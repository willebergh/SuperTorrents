<?php
  session_start();
  if (empty($_SESSION['authenticated'])) {
    echo "
      <h1>not logged in</h1>
      <a href=\"./login.php\">login</a>
    ";
  } else if ($_SESSION['authenticated'] == true) {
    echo "
      <h1>Welcome home @ ".$_SESSION['username']."</h1>
      <a href=\"./logout.php\">logout</a>
      ";
  } else {
    echo "
      <h1>not logged in</h1>
      <a href=\"./login.php\">login</a>
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


  </body>
</html>
