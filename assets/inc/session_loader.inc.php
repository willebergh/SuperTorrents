<?php
  session_start();
  if (empty($_SESSION['authenticated'])) {
    $loggedIN_content = false;
  } else if ($_SESSION['authenticated'] == true) {
    $loggedIN_content = true;
  } else {
    $loggedIN_content = false;
  }
