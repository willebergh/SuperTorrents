<?php
  $page_uuid_css = "user.signup.css";
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
?>

<div class="formContainer">
  <h1>Sign up</h1>
  <form class="form">
    <div class="form_username">
      <label for="username">Username</label>
      <input type="text" name="username" placeholder="username">
    </div>
    <div class="form_email">
      <label for="email">E-mail</label>
      <input type="text" name="e-mail" placeholder="e-mail">
    </div>
    <div class="form_password">
      <label for="passowrd">Password</label>
      <input type="password" name="password" placeholder="password">
      <input type="password" name="password_repeat" placeholder="repeat password">
    </div>
    <div class="form_button">
      <button type="submit" name="login_button">Sign up</button>
    </div>
  </form>
</div>

<?php
  include_once($footerINC);
?>
