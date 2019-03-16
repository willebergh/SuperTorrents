<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperTorrents</title>
    <link rel="stylesheet" href="/supertorrents/assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body scroll="no">
    <main class="main">
      <div class="slogan">
        <p>Fast, Secure and Anonymous Torrents based</br>on the Blockchain technology and Tor network.</p>
      </div>
      <div class="logo">
        <h1>Supertorrents.to</h1>
      </div>
      <div class="nav">
        <?php
          echo "
          <div><a href=\"$home_PageURL\">Home</a></div>
          <div><a href=\"$browse_PageURL\">Browse</a></div>
          <div><a href=\"$recent_PageURL\">Recent</a></div>
          <div><a href=\"$toplist_PageURL\">Top 100</a></div>
          <div class=\"hide_mobile\"><a href=\"$torrentView_PageURL?a=movies\">Movies</a></div>
          <div class=\"hide_mobile\"><a href=\"$torrentView_PageURL?a=tv-shows\">Tv-shows</a></div>
          ";
        ?>
      </div>
      <div class="search">
        <form class="search_form" action="./assets/script/search.script.php" method="get">
          <input type="text" name="search" placeholder="Search torrents...">
          <button type="submit" name="button"><span class="mobile-bottom-nav-item-icon fas fa-search"></span></button>
        </form>
      </div>
      <div class="links">
        <div><a href="#">Tor Project</a></div>
        <div><a href="#">About this website</a></div>
        <div><a href="#">Blockchain</a></div>
      </div>
      <div class="donation">
        <div class="donation_title"><h2>Donation Addresses</h2></div>
        <div>
          <h3>BTC: </h3>
          <p>3BMjZnfWDAGyvAyEjYLNw1r1fanrqPXAzX</p>
        </div>
        <div>
          <h3>ZEC: </h3>
          <p>t1V3qkYBkPNN8rDcPgWudLvufaEFabX64Nq</p>
        </div>
        <div>
          <h3>ZEN: </h3>
          <p>znRq1SzAQZHAyHsotoBUzP8NoYFMxg4oCXH</p>
        </div>
        <div>
          <h3>ETH: </h3>
          <p>0x1db98Dd466B9Fb086F7ceCF4E9Ab40B61681f6A4</p>
        </div>
      </div>
    </main>
  </body>
</html>
