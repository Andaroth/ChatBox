<?php
  class chatController {
  public function __construct(){
    /*
    private function getUserId($username) { 
      $do = "SELECT ID FROM my_users WHERE username = '".$username."'"; 
      try { 
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0]; 
        return $try; 
      } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();} 
      
    private function getUserById($thisID) {
      global $db;
      $do = "SELECT username FROM my_users WHERE ID = '".$thisID."'";
      try {
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0];
        return $try;
      } catch(Exception $e) {echo("Error getUserById : ".$e->getMessage());die();}
    }
     
    private function getTimePost($user_id) { 
      $do = "SELECT datepost FROM shoutbox WHERE user_id = '".$user_id."' ORDER BY id DESC"; 
      try { 
        $try = $db->query($do); $try = $try->fetch(); $try = $try[0]; 
        return $try; 
      } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();} 
    }
    
    private function addChat($user_id,$message) {
      global $db;
      try {
        $db->exec("INSERT INTO shoutbox (user_id,message) VALUES ('".$user_id."','".$message."')");
      } catch(Exception $e) {echo("Error addChat : ".$e->getMessage());die();}
    }
    */ 
  } 
  }
  public function run(){
    include View . 'chat.php';
  }
 }
?>
