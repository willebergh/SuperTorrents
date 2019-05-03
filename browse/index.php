<?php
  include_once "../assets/inc/session_loader.inc.php";
  include_once "".$_SERVER['DOCUMENT_ROOT']."/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  echo "
    <style media=\"screen\">.headerNav_liBrowse{background-color: #2d98da;}</style>
    <main class=\"main\">
  ";

      $sql = "SELECT DISTINCT category FROM torrents ORDER BY category ASC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "
        <div class=\"flexWrapper\">
          <div class=\"flexContainer\">
        ";
        while($row = $result->fetch_assoc()) {
          echo "
            <div class=\"categoryContainer\">
              <div class=\"title\">
                <a href=\"$categories_PageURL?a=".$row["category"]."\"><h4>"; echo ucfirst($row["category"]); echo "</h4></a>
              </div>
              <div class=\"category-navContainer\">
                <ul class=\"category-nav\">
                  <li><a href=\"$categories_PageURL?a=".$row["category"]."\">Recent</a></li>
                  <li><a href=\"$categories_PageURL?a=".$row["category"]."\">Popular</a></li>
                  <li><a href=\"$categories_PageURL?a=".$row["category"]."\">Top/Month</a></li>
                  <li><a href=\"$categories_PageURL?a=".$row["category"]."\">Top/Week</a></li>
                  <li><a href=\"$categories_PageURL?a=".$row["category"]."\">All Torrents</a></li>
                </ul>
              </div>
            </div>
          ";
        }
        echo "
          </div>
        </div>
        ";
      } else {
        echo "
          <p>No categories were found!</br>Error: 01</p>
        ";
      };

  echo "
    </main>
  ";

  include_once($footerINC);
