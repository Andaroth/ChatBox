<div class="wrapper">
    <div class="card">
    <div>
      <h2>Se connecter</h2>
      <p><?php echo $alertMsg; ?></p>
      <form action="./?page=login" method="post">
        <div class="twocol">
          <div>
            <input class="clearform first inputupper" type="text" name="username" id="login_username" placeholder="username">
            <input class="clearform" type="password" name="pass" id="login_pass" placeholder="password">
          </div>
        </div>
        <input type="submit" value="Connexion">
      </form>
    </div>
    </div>
    </div>
