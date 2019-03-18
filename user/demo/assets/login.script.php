<?php
  include_once "./dbh.inc.php";

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  $row = $result->fetch_assoc();
  if ($username == $row['username'] && $password = $row['password']) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
  } else {
    echo "wrong username or password";
  }

  if ($_SESSION['loggedin'] == true) {
    header("Location: ../index.php");
  }
?>
