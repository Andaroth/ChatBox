<?php
  /*session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $con = mysql_connect('localhost', 'root', '');
  mysql_select_db('chatbox', $con);

  $result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");

  if (mysql_num_rows($result)){
    $res = mysql_fetch_array($result);
    $_SESSION['username'] = $res['username'];
    echo "You are now Logged in. Click <a href='index.php'>here</a> to go back to main chat window.";
  } else {
    echo "No user found. Please go <a href='./'>back</a> and enter the correct login.<br>";
    echo "You may register a new account by clicking <a href='./?page=register'>here</a>.";
  }*/
?>
  <div>
    <h2>Se connecter</h2>
    <p><?php echo $alertMsg; ?></p>
    <form action="./?page=login" method="post">
      <div class="twocol">
        <div>
          <label for="login_username">Nom d'utilisateur</label>
          <label for="login_pass">Mot de passe</label>
        </div>
        <div>
          <input class="clearform first inputupper" type="text" name="username" id="login_username" placeholder="username">
          <input class="clearform" type="password" name="pass" id="login_pass" placeholder="password">
        </div>
      </div>
      <input type="submit" value="Connexion">
    </form>
  </div>