<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
?>

<main class="main">
  <div class="formContainer">
    <h1>Login</h1>
    <form class="form">
      <div class="form_username">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
      </div>
      <div class="form_password">
        <label for="passowrd">Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
      <div class="form_extra_links">
        <a href="./signup.php">Forgot password?</a>
        <a href="./signup.php">Signup now!</a>
      </div>
      <div class="form_button">
        <button type="submit" name="login_button">Login</button>
      </div>
    </form>
  </div>
</main>

<?php
  include_once($footerINC);
?>
