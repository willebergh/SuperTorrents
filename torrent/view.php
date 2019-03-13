<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  if (isset($_GET['a'])) {
    $uuid = $_GET['a'];
  } else {
    return;
  }

  $sql = "SELECT category, title, size, date, uploader, seeders, leechers FROM torrents WHERE uuid = '$uuid'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

  }
