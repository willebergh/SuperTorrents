<?php
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "
        <div class=\"torrent_list_table\">
          <div class=\"torrent_list_table_row_top\">
            <div class=\"table_header table_header_category\">category</div>
            <div class=\"table_header table_header_title\">title</div>
            <div class=\"table_header table_header_size\">size</div>
            <div class=\"table_header table_header_time\">time</div>
            <div class=\"table_header table_header_uploader\">uploader</div>
            <div class=\"table_header table_header_seeders\">se</div>
            <div class=\"table_header table_header_leechers\">le</div>
            <div class=\"table_header table_header_size_seeders_infoColumn\"><div>info</div></div>
          </div>
    ";
    while($row = $result->fetch_assoc()) {

      if (substr("".$row["date"]."",0,-9) == date("Y-m-d")) {
        $time = substr("".$row["date"]."",-8);
      } else {
        $time = substr("".$row["date"]."",0,-9);
      }

      echo "
      <div class=\"torrent_list_table_row\">
        <div class=\"table_data table_data_category\"><a href=\"$categories_PageURL?a=".$row["category"]."\">"; echo ucfirst($row["category"]); echo "</a></div>
        <div class=\"table_data table_data_title\"><a href=\"$torrentView_PageURL?a=".$row["uuid"]."\">".$row["title"]."</a></div>
        <div class=\"table_data table_data_size\"><a>".$row["size"]."</a></div>
        <div class=\"table_data table_data_time\"><a>$time</a></div>
        <div class=\"table_data table_data_uploader\"><a href=\"".$row["uploader"]."\">".$row["uploader"]."</a></div>
        <div class=\"table_data table_data_seeders\"><a>".$row["seeders"]."</a></div>
        <div class=\"table_data table_data_leechers\"><a>".$row["leechers"]."</a></div>
        <div class=\"table_data table_data_size_seeders_infoColumn\">
          <div><a>".$row["seeders"]."</a></div>
          <div><a>".$row["size"]."</a></div>
        </div>
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
