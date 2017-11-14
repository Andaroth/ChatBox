<?php
  class registerController {
  public function __construct(){
      /*private function addUser($username,$mail,$pass) { 
    global $DB; 
    try { 
      $DB->exec("INSERT INTO my_users (username,mail,pass) VALUES ('".$username."','".$mail."','".$pass."')"); 
    } catch(Exception $e) {echo("Error addUser : ".$e->getMessage());die();}*/ 
  }
  }
  public function run(){
    include View . 'register.php';
  }
?>
