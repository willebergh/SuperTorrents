<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  echo "<main class=\"main\">";

  if (isset($_GET['a'])) {
    $uuid = $_GET['a'];
  } else {
    return;
  }

  $sql = "SELECT category, title, size, date, uploader, seeders, leechers FROM torrents WHERE uuid = '$uuid'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <div class=\"torrentViewer\">
        <div class=\"torrentViewer_title\">
          <h1>".$row["title"]."</h1>
        </div>
        <div class=\"torrentViewer_info\">
          <div class=\"torrentViewer_info_item\">
            <div><a>Category</a></div>
            <div><a>:</a></div>
            <div><a href=\"\">"; echo ucfirst($row["category"]); echo "</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Files</a></div>
            <div><a>:</a></div>
            <div><a>3</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Total Size</a></div>
            <div><a>:</a></div>
            <div><a>".$row["size"]."</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Upload Date</a></div>
            <div><a>:</a></div>
            <div><a>".$row["date"]."</a></div>
          </div>
        </div>
        <span class=\"torrentViewer_info_spacer\"></span>
        <div class=\"torrentViewer_info\">
          <div class=\"torrentViewer_info_item\">
            <div><a>Seeders</a></div>
            <div><a>:</a></div>
            <div><a>".$row["seeders"]."</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Leechers</a></div>
            <div><a>:</a></div>
            <div><a>".$row["leechers"]."</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Downloads</a></div>
            <div><a>:</a></div>
            <div><a>64</a></div>
          </div>
          <div class=\"torrentViewer_info_item\">
            <div><a>Uploaded By</a></div>
            <div><a>:</a></div>
            <div><a href=\"".$row["uploader"]."\">".$row["uploader"]."</a></div>
          </div>
        </div>
        <div class=\"torrentViewer_description\">
          <h1>Description</h1>
          <div class=\"torrentViewer_description_p_container\">
            <p>alksjdlka askdj asa skdjaskljdas asjd kajsdaskdja</p>
          </div>
        </div>
      </div>
      ";
    }
  } else {
    echo "
    <div class=\"torrentViewer\">
      <div class=\"torrentViewer_title\">
        <h1>title</h1>
      </div>
    </div>
    ";
  }

  echo "</main>";

  include_once($footerINC);
