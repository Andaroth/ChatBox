<?php
  class loginController {
  public function __construct(){
    if ( (isset($_POST['username'])) && (isset($_POST['pass'])) && (isset($_POST['submit'])) )
    {
      $username = $_POST['username'];
      $pass = hash("sha256", htmlspecialchars($_POST['pass']));
      $select = $DB->query("SELECT COUNT(*) AS count FROM my_users WHERE username = '".$username."' AND pass = '".$pass."'");
      $row = $select->fetch();
      $count = $row['count'];
        echo "aaaaaaaaaaah !! form ok";
    }
    else {
      $username = "Guest";
      $pass = "";
      $count = -1;
        
      $alertMsg = "Veuillez vous connecter avec vos identifiants.";
        echo "aaaaaaaaaaah !! rien";
    }
                   
    if($count==1) {
      $_SESSION["logged"] = 1;
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = intval(getUserId($username));
        
      $alertMsg = "Tu t'es connecté comme il faut !";
        echo "aaaaaaaaaaah !! oké tu pe rentray";
        
      // Il faut soit rediriger le user, soit faire toute la page en controller. 
      // header("Refresh: 3; http://".$_SERVER['HTTP_HOST']."/");
    }
    else {
      $alertMsg = "Mot de passe ou nom d'utilisateur incorrect !";
        echo "aaaaaaaaaaah !! oké tu pe PAS rentray";
    }
  }
  public function run(){
    global $alertMsg;
    include View . 'login.php';
  }
 }
?>