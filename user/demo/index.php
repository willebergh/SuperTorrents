<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>home</title>
  </head>
  <body>
    <h1>Welcome home <?php $_SESSION['username']; ?></h1>
  </body>
</html>
