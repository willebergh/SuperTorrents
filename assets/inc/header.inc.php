<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperTorrents</title>
    <?php
      echo "<link rel=\"stylesheet\" href=\"$globalCSS\" type=\"text/css\">";
      echo "<link rel=\"stylesheet\" href=\"$headerCSS\" type=\"text/css\">";
      echo "<link rel=\"stylesheet\" href=\"$mainCSS\" type=\"text/css\">";
      echo "<link rel=\"stylesheet\" href=\"$browseTorrent_tableCSS\" type=\"text/css\">";
      echo "<link rel=\"stylesheet\" href=\"$footerCSS\" type=\"text/css\">";
      echo "<link rel=\"stylesheet\" href=\"$welcomeSignCSS\" type=\"text/css\">";

      if (isset($page_uuid_css)) {
        echo "<link rel=\"stylesheet\" href=\"$webRoot/assets/css/page_uuid_css/$page_uuid_css\" type=\"text/css\">";
      } else {
        $page_uuid_css = "none";
      }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body style="<?php echo "background-image:url($asset_content/img/bg.png);" ?>">
    <header class="header">
      <script>
        function toggleOPEN() {
          document.getElementById("mobile_side_menu").style.width = "100%";
          document.getElementById("mobile_bottom_nav_menuBtn").setAttribute( "onClick", "toggleCLOSE();" );
        }

        function toggleCLOSE() {
          document.getElementById("mobile_side_menu").style.width = "0";
          document.getElementById("mobile_bottom_nav_menuBtn").setAttribute( "onClick", "toggleOPEN();" );
        }
    </script>
      <div class="logo">
        <?php
          echo "
            <a href=\"$home_PageURL\"><h1>SuperTorrents.to</h1></a>
          ";
        ?>
      </div>
      <div class="navWrapper">
        <ul class="nav">
          <?php
            echo "
            <li class=\"currentPage_home headerNav_liHome\"><a href=\"$home_PageURL\">Home</a></li>
            <li class=\"currentPage_browse headerNav_liBrowse\"><a href=\"$browse_PageURL\">Browse</a></li>
            <li class=\"currentPage_recent headerNav_liRecent\"><a href=\"$recent_PageURL\">Recent</a></li>
            <li class=\"currentPage_toplist headerNav_liToplist\"><a href=\"$toplist_PageURL\">Top 100</a></li>
            <li class=\"currentPage_movies headerNav_liMovies\"><a href=\"$categories_PageURL?a=movies\">Movies</a></li>
            <li class=\"currentPage_tv-shows headerNav_liTVShows\"><a href=\"$categories_PageURL?a=tv-shows\">Tv-shows</a></li>
            <li class=\"headerNav_liSpacer\">|</li>
            <li class=\"currentPage_login headerNav_liLogin\"><a href=\"$login_PageURL\">Login</a></li>
            ";
          ?>
        </ul>
      </div>
      <div class="header_searchBarWrapper">
        <form class="header_searchBar" action="/supertorrents/assets/script/search.script.php" method="get">
          <input id="searchBar_input" type="text" name="search" placeholder="Search torrents...">
          <button type="submit" name=""><span class="fas fa-search"></span></button>
        </form>
      </div>
      <div id="mobile_side_menu" class="mobile-side-menu">
        <a href="javascript:void(0)" class="fas fa-times mobile-side-menu-closeBtn" onclick="toggleCLOSE()"></a>
          <div class="mobile-side-menu-container">
            <?php
              echo "
              <a class=\"mobile-side-menu-item\" href=\"$home_PageURL\">Home</a>
              <a class=\"mobile-side-menu-item\" href=\"$browse_PageURL\">Browse</a>
              <a class=\"mobile-side-menu-item\" href=\"$recent_PageURL\">Recent</a>
              <a class=\"mobile-side-menu-item\" href=\"$toplist_PageURL\">Top 100</a>
              <a class=\"mobile-side-menu-item\" href=\"$categories_PageURL?a=movies\">Movies</a>
              <a class=\"mobile-side-menu-item\" href=\"$categories_PageURL?a=tv-shows\">Tv-shows</a>
              "
            ?>
          </div>
      </div>
      </div>
      <div class="mobile-bottom-nav">
        <div class="mobile-bottom-nav-item-container">
          <a href="javascript:void(0)" id="mobile_bottom_nav_menuBtn" class="mobile-bottom-nav-item menu" onclick="toggleOPEN()">
            <span class="mobile-bottom-nav-item-icon fas fa-bars"></span>
            <span class="mobile-bottom-nav-item-text">Menu</span>
          </a>
          <a href="javascript:document.getElementById('searchBar_input').focus()" class="mobile-bottom-nav-item search">
            <span class="mobile-bottom-nav-item-icon fas fa-search"></span>
            <span class="mobile-bottom-nav-item-text">Search</span>
          </a>
          <?php echo "<a href=\"$login_PageURL\" class=\"mobile-bottom-nav-item login\">"; ?>
            <span class="mobile-bottom-nav-item-icon fas fa-user"></span>
            <span class="mobile-bottom-nav-item-text">Login</span>
          </a>
        </div>
      </div>
    </header>
