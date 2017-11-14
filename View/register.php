<div>
      <h2>S'inscrire</h2>
      <p><?php echo $alertMsg; ?></p>
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
