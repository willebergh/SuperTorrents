<?php
  include_once "../assets/inc/session_loader.inc.php";
  include_once "".$_SERVER['DOCUMENT_ROOT']."/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  if (isset($_GET['a'])) {
    $category = $_GET['a'];
  } else {
    return;
  }

  if ($category == "movies") {
    echo "<style media=\"screen\">.headerNav_liMovies{background-color: #2d98da;}</style>";
  } else {
    if ($category == "tv-shows") {
      echo "<style media=\"screen\">.headerNav_liTVShows{background-color: #2d98da;}</style>";
    }
  }


  $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = '$category'  ORDER BY date DESC";

  echo "
    <main class=\"main\">
  ";
  include_once($browseTorrent_tableINC);
  echo "
    </main>
  ";

  include_once($footerINC);
