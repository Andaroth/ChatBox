<?php
  class registerController {
    public function __construct(){
      global $DB, $alertMsg;
      $fail = 0;
      
      if (isset($_POST['submit'])) {
        if (!(isset($_POST["username"]))) {
          $alertMsg = "username undefined";
          $fail++;
        } else if (trim(($_POST["username"])) == "") {
          $alertMsg = "Entre ton nom";
          $fail++;
        } else if (!(isset($_POST["mail"]))) {
          $alertMsg = "Entre ton mail";
          $fail++;
        } else if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))) {
          $alertMsg = "Format de mail invalide";
          $fail++;
        } else if (!(isset($_POST["passOne"]))) {
          $alertMsg = "Entre ton mot de passe deux fois";
          $fail++;
        } else if (!(isset($_POST["passTwo"]))) {
          $alertMsg = "Entre ton mot de passe deux fois";
          $fail++;
        } else if ($_POST["passOne"] == "") {
          $alertMsg = "Entre ton mot de passe deux fois";
          $fail++;  
        } else if ($_POST["passTwo"] == "") {
          $alertMsg = "Entre ton mot de passe deux fois";
          $fail++;
        } else if ($_POST["passOne"] != $_POST["passTwo"]) {
          $alertMsg = "Les mots de passes ne correspondent pas";
          $fail++;
        }
          
        if ($fail==0) {
          $username = strtolower(trim(htmlspecialchars($_POST["username"])));
          $mail = $_POST["mail"];
          $pass = hash("sha256", htmlspecialchars($_POST["passOne"]));
          $select = $DB->query("SELECT COUNT(username) AS count FROM my_users WHERE username = '".$username."'");
          $row = $select->fetch();
          $count = $row['count'];
          
          if($count > 0) { 
            $alertMsg = "Ce pseudo est déjà utilisé";
          } else {
            $_SESSION["logged"] = 1;
            $_SESSION["username"] = $username;
            $_SESSION["user_id"] = intval(getUserId($username));
            $alertMsg = "Bonjour ".ucfirst($username).", tu peux maintenant <a href=\"/?page=chat\">voir le chat</a>";
            $this->addUser($username,$mail,$pass);
            
            // Il faut soit rediriger le user, soit faire toute la page en controller. 
            header("Refresh: 3; http://".$_SERVER['HTTP_HOST']."/?page=chat");
          }
        }
      }
    }
    private function addUser($username,$mail,$pass) { 
      global $DB; 
      try { 
        $DB->exec("INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')"); 
      } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}
    }
    public function run(){
      global $alertMsg;
      include View . 'register.php';
    }
  }
?>
