<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($dbhINC);
  include_once($headerINC);

?>
  <style media="screen">.headerNav_liHome a {background-color: #2d98da;}</style>
  <main class="main">
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Torrents right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Movies right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = 'movies'  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Tv-shows right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = 'tv-shows'  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Music right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = 'music'  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Games right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = 'games'  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
    <div class="homePage_onDisplay">
      <div class="homePage_onDisplay_title">
        <h5>Most popular Software right now</h5>
      </div>
      <div class="homePage_onDisplay_content">
        <?php
          $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents WHERE category = 'software'  ORDER BY seeders DESC LIMIT 10";
          require($browseTorrent_tableINC);
        ?>
      </div>
    </div>
  </main>

<?php
  include_once($footerINC);
?>
