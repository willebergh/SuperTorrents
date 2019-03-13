<?php
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "
    <div class=\"tableWrapper\">
      <div class=\"tableContainer\">
        <div class=\"browseTorrent_table\">
          <div class=\"browseTorrent_tableRow_top\">
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_category\"><a>Category</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_title\"><a>Title</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_size\"><a>Size</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_time\"><a>Time</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_uploader\"><a>Uploader</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_seeders\"><a>Se</a></div>
            <div class=\"browseTorrent_tableHeader browseTorrent_tableColumn_leechers\"><a>Le</a></div>
          </div>
    ";
    while($row = $result->fetch_assoc()) {

      if (substr("".$row["date"]."",0,-9) == date("Y-m-d")) {
        $time = substr("".$row["date"]."",-8);
      } else {
        $time = substr("".$row["date"]."",0,-9);
      }

      echo "
      <div class=\"browseTorrent_tableRow\">
        <div class=\"browseTorrent_tableData hoverUnderline browseTorrent_tableColumn_category\"><a href=\"$categories_PageURL?a=".$row["category"]."\">"; echo ucfirst($row["category"]); echo "</a></div>
        <div class=\"browseTorrent_tableData hoverUnderline browseTorrent_tableColumn_title\"><a href=\"$torrentView_PageURL?a=".$row["uuid"]."\">".$row["title"]."</a></div>
        <div class=\"browseTorrent_tableData browseTorrent_tableColumn_size\"><a>".$row["size"]."</a></div>
        <div class=\"browseTorrent_tableData browseTorrent_tableColumn_time\"><a>$time</a></div>
        <div class=\"browseTorrent_tableData hoverUnderline browseTorrent_tableColumn_uploader\"><a href=\"".$row["uploader"]."\">".$row["uploader"]."</a></div>
        <div class=\"browseTorrent_tableData browseTorrent_tableColumn_seeders\"><a>".$row["seeders"]."</a></div>
        <div class=\"browseTorrent_tableData browseTorrent_tableColumn_leechers\"><a>".$row["leechers"]."</a></div>
      </div>
      ";
    }
    echo "
        </div>
      </div>
    </div>
    ";
  } else {
    echo "<a>0 results</a>";
  }
