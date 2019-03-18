<?php
  session_start();
  include_once "./assets/dbh.inc.php";

  $sql = "SELECT * FROM users WHERE username = $username";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()) {
    echo "".$row['username']." ".$row['email']." ".$row['password']."";
  }
