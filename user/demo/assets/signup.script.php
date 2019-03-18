<?php
  include_once "./dbh.inc.php";

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($conn, $_POST['password_repeat']);

  // Checks if the username is already registered
  // If the username is registered, echo error message and set variable to invalid
  // If the username is not registered set variable to valid
  $sql_check_username = "SELECT * FROM users WHERE username = '$username'";
  $result_check_username = mysqli_query($conn, $sql_check_username);

  if ($result_check_username->num_rows > 0) {
    $check_username = "invalid";
  } else {
    $check_username = "valid";
  }

  // Checks if the email is already registered
  // If the email is registered, echo error message and set variable to invalid
  // If the email is not registered set variable to valid
  $sql_check_email = "SELECT * FROM users WHERE email = '$email'";
  $result_check_email = mysqli_query($conn, $sql_check_email);

  if ($result_check_email->num_rows > 0) {
    $check_email = "invalid";
  } else {
    $check_email = "valid";
  }

  // Checks if the two password fields match each other
  // If the passwords match, set variable to valid
  // If the passwords do not match, set variable to invalid
  if ($password == $password_repeat) {
    $check_password = "valid";
  } else {
    $check_password = "invalid";
  }

  //Checks if both user and email are ok
  // If they are ok, insert into the database
  $sql_insert = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$password')";

  if ($check_username == "valid" && $check_email == "valid" && $check_password == "valid") {
    mysqli_query($conn, $sql_insert);
    header("Location: ../index.php");
  } else {
    header("Location: ../signup.php?username=$check_username&email=$check_email&password=$check_password");
  }
?>
