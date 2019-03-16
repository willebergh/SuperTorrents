<?php
  $serverRoot = $_SERVER['DOCUMENT_ROOT'];
  $projectRoot = "/supertorrents";
  $globalRoot = "$serverRoot$projectRoot";
  $webRoot = "$projectRoot";

  $asset_content = "$webRoot/assets/content";

  $browseTorrent_tableCSS = "$webRoot/assets/css/browseTorrent_table.css";
  $footerCSS = "$webRoot/assets/css/footer.css";
  $globalCSS = "$webRoot/assets/css/global.css";
  $headerCSS = "$webRoot/assets/css/header.css";
  $mainCSS = "$webRoot/assets/css/main.css";
  $welcomeSignCSS = "$webRoot/assets/css/welcomeSign.css";
  $user_loginCSS = "$webRoot/assets/css/user_login.css";

  $browseTorrent_tableINC = "$globalRoot/assets/inc/browseTorrent_table.inc.php";
  $dbhINC = "$globalRoot/assets/inc/dbh.inc.php";
  $footerINC = "$globalRoot/assets/inc/footer.inc.php";
  $headerINC = "$globalRoot/assets/inc/header.inc.php";
  $welcomeSignINC = "$globalRoot/assets/inc/welcomeSign.inc.php";

  $searchSCRIPT = "$webRoot/search/searchViewer.php";

  $home_PageURL = "$webRoot/home/";
  $browse_PageURL = "$webRoot/browse/";
  $recent_PageURL = "$webRoot/browse/recent.php";
  $toplist_PageURL = "$webRoot/browse/toplist.php";
  $categories_PageURL = "$webRoot/browse/categories.php";
  $login_PageURL = "$webRoot/user/login.php";
  $torrent_PageURL = "$webRoot/torrent/";
  $torrentView_PageURL = "$webRoot/torrent/view.php";
