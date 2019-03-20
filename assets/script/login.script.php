<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once "../inc/dbh.inc.php";

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username) || empty($password)) {
    header("Location: $login_PageURL?error=noInput");
    exit;
  } else {
    $sql = "SELECT username, password FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: $login_PageURL?error=sql_error");
    } else {

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {

        $password_check = password_verify($password, $row['password']);
        if ($password_check == false) {
          header("Location: $login_PageURL?error=1");
          exit;

        } else if ($password_check == true) {

          session_start();

          $_SESSION['username'] = $username;
          $_SESSION['authenticated'] = true;

          header("Location: $home_PageURL");
          exit;

        } else {

          header("Location: $login_PageURL?error=1");

        }
      }
    }
  }
?>
