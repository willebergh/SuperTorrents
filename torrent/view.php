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
        <div><a>Category</a></div>
        <div><a>:</a></div>
        <div><a href="#">Games</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Files</a></div>
        <div><a>:</a></div>
        <div><a href="#">3</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Total Size</a></div>
        <div><a>:</a></div>
        <div><a href="#">12 GB</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Upload Date</a></div>
        <div><a>:</a></div>
        <div><a href="#">2019-03-14</a></div>
      </div>
    </div>
    <span class="torrentViewer_info_spacer"></span>
    <div class="torrentViewer_info">
      <div class="torrentViewer_info_item">
        <div><a>Seeders</a></div>
        <div><a>:</a></div>
        <div><a href="#">324</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Leechers</a></div>
        <div><a>:</a></div>
        <div><a href="#">39</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Downloads</a></div>
        <div><a>:</a></div>
        <div><a href="#">64</a></div>
      </div>
      <div class="torrentViewer_info_item">
        <div><a>Uploaded By</a></div>
        <div><a>:</a></div>
        <div><a href="#">BERGET</a></div>
      </div>
    </div>
    <div class="torrentViewer_description">
      <h1>Description</h1>
      <div class="torrentViewer_description_p_container">
        <p>alksjdlka askdj asa skdjaskljdas asjd kajsdaskdja</p>
      </div>
    </div>
  </div>
</main>
