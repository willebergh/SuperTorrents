<?php
  include_once "../assets/inc/session_loader.inc.php";
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
          <a href=\"#\"><h1>Download</h1></a>
        </div>
        <div class=\"torrentViewer_info torrentViewer_info_left\">
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
        <div class=\"torrentViewer_info torrentViewer_info_right\">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut massa quam, volutpat a est vel, tincidunt volutpat velit. Aliquam sapien enim, sodales non pulvinar ac, volutpat non ligula. Donec ornare quis est in consectetur. Nulla aliquet et quam sed mattis. Nunc iaculis augue ipsum, vel ornare orci gravida in. In malesuada, augue rutrum ullamcorper hendrerit, nunc velit ultrices mauris, at tincidunt est augue vel mauris. Maecenas at lectus vel erat vestibulum tincidunt vitae ut nisl. Suspendisse potenti. Fusce at erat vel odio suscipit elementum euismod vitae neque. Sed risus sem, efficitur sed sapien id, aliquet placerat neque. Duis facilisis est ultrices libero ultrices gravida. Phasellus molestie venenatis mi, at tincidunt nulla ultrices vel.</p>
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
