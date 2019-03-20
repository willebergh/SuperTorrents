<?php
  include_once "../assets/inc/session_loader.inc.php";
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  echo "
  <style media=\"screen\">.headerNav_liRecent{background-color: #2d98da;}</style>
  ";

  $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents  ORDER BY date DESC";

  echo "
    <main class=\"main\">
  ";
  include_once($browseTorrent_tableINC);
  echo "
    </main>
  ";

  include_once($footerINC);
