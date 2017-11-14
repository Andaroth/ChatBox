<?php
  class loginController {
  public function __construct(){
    global $DB, $alertMsg;
    if ( (isset($_POST['username'])) && (isset($_POST['pass'])))
    {
      $username = $_POST['username'];
      $pass = hash("sha256", htmlspecialchars($_POST['pass']));
      $select = $DB->query("SELECT COUNT(*) AS count FROM my_users WHERE username = '".$username."' AND pass = '".$pass."'");
      $row = $select->fetch();
      $count = $row['count'];
    }
    else {
      $username = "Guest";
      $pass = "";
      $count = -1;
        
      $alertMsg = "Veuillez vous connecter avec vos identifiants.";
    }
                   
    if($count==1) {
      $_SESSION["logged"] = 1;
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = intval(getUserId($username));
        
      $alertMsg = "Tu t'es connecté comme il faut !";
        
      // Il faut soit rediriger le user, soit faire toute la page en controller. 
      header("Refresh: 3; http://".$_SERVER['HTTP_HOST']."/?page=chat");
    }
    else {
      $alertMsg = "Mot de passe ou nom d'utilisateur incorrect !";
    }
  }
  public function run(){
    global $alertMsg;
    include View . 'login.php';
  }
 }
?>
