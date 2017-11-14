<?php
  class chatController {
  public function __construct(){
    
  }

  private function getTimePost($user_id) { 
    $do = "SELECT datepost FROM shoutbox WHERE user_id = '".$user_id."' ORDER BY id DESC"; 
    try { 
      $try = $DB->query($do); $try = $try->fetch(); $try = $try[0]; 
      return $try; 
    } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();} 
  }

  private function addChat($user_id,$message) {
    global $DB;
    try {
      $DB->exec("INSERT INTO shoutbox (user_id,message) VALUES ('".$user_id."','".$message."')");
    } catch(Exception $e) {echo("Error addChat : ".$e->getMessage());die();}
  }
  public function run(){
    global $alertMsg;
    include View . 'chat.php';
  }
 }
?>
