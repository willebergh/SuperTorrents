<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);


  if (isset($_POST)) {
    $search_query = $_GET['search'];
  }

  $sql = "SELECT * FROM torrents WHERE title LIKE '%$search_query%' OR uploader LIKE '%$search_query%'";
  include_once($browseTorrent_tableINC);


  include_once($footerINC);
