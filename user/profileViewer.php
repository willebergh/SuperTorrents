<?php
  include_once "../assets/inc/session_loader.inc.php";
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  if (isset($_GET['username'])) {
    $user = $_GET['username'];
  } else {
    $user = "not_found";
  }
?>

  <main class="main">
    <div class="profileViewer_container">

    </div>

<?php
  $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE uploader = '$user'  ORDER BY date DESC";
  include_once($browseTorrent_tableINC);
?>

  </main>

<?php
  include_once($footerINC);
?>
