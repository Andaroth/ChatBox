<?php
/*  if (isset($_POST['submit'])) {
    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('chatbox', $con);
    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $pword2 = $_POST['password2'];
    if ($pword != $pword2) {
      echo "Passwords do not match. <br>";
    } else {
      $checkexist = mysql_query("SELECT username FROM users WHERE username = '$uname'");
      if (mysql_num_rows($checkexist)) {
        echo "Username already exists, Please select other username.<br>";
      } else {
        mysql_query("INSERT INTO users (`username`,`password`) VALUES('$uname','$pword')" );
        echo "You are now registered. Click <a href='./'>here</a> to start chatting";
      }
    }
  }*/
?>
<div>
  <h2>S'inscrire</h2>
  <form action="./?page=register" method="post" autocomplete="off">
    <div class="twocol">
        <div>
          <label for="register_username">Nom d'utilisateur</label>
          <label for="register_mail">Votre e-mail</label>
          <label for="register_passOne">Mot de passe</label>
          <label for="register_passTwo">Confirmez</label>
        </div>
        <div>
          <input class="clearform first inputupper" type="text" name="username" id="register_username" autocomplete="off" placeholder="username">
          <input class="clearform" type="text" name="mail" id="register_mail" autocomplete="off" placeholder="mail">
          <input class="clearform" type="password" name="passOne" id="register_passOne" autocomplete="off" placeholder="password">
          <input class="clearform" type="password" name="passTwo" id="register_passTwo" autocomplete="off" placeholder="password (again)">
        </div>
    </div>
    <input type="submit" value="Inscription">
  </form>
</div>