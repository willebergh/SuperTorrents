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

  } else {

  }
?>
<main class="main">
  <div class="torrentViewer">
    <div class="torrentViewer_title">
      <h1>title</h1>
    </div>
    <div class="torrentViewer_info">
      <div class="torrentViewer_info_item">
        <a>Category:</a>
        <a href="#">Games</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Files:</a>
        <a href="#">3</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Total Size:</a>
        <a href="#">12 GB</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Upload Date:</a>
        <a href="#">2019-03-14</a>
      </div>
    </div>
    <div class="torrentViewer_info">
      <div class="torrentViewer_info_item">
        <a>Seeders:</a>
        <a href="#">324</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Leechers:</a>
        <a href="#">39</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Downloads:</a>
        <a href="#">64</a>
      </div>
      <div class="torrentViewer_info_item">
        <a>Uploaded By:</a>
        <a href="#">BERGET</a>
      </div>
    </div>
    <div class="torrentViewer_description">
      <p>alksjdlka askdj asa skdjaskljdas asjd kajsdaskdja</p>
    </div>
  </div>
</main>
