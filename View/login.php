<div class="wrapper">
    <div class="card">
    <div>
      <h2>Se connecter</h2>
      <p class="alert"><?php echo $alertMsg; ?></p>
      <form action="./?page=login" method="post">
        <div>
          <input class="clearform first inputupper" type="text" name="username" id="login_username" placeholder="username">
          <input class="clearform" type="password" name="pass" id="login_pass" placeholder="password">
        </div>
        <input type="submit" value="Connexion">
      </form>
      <a href="./?page=register">S'enregistrer</a>
    </div>
    </div>
    </div>
