<?php
  class chatController {
  public function __construct(){
    if (isset($_POST["chat_message"])) {
      $user_id = intval($_SESSION["user_id"]);
      $message = htmlspecialchars($_POST["chat_message"]);
      if (strlen($_POST["chat_message"]) > 3) {
          $this->addChat(intval($user_id),$message);
          header("Refresh: 0; http://".$_SERVER['HTTP_HOST']."/?page=chat");
      } else { $userFeedback = "Pas de spam (3 chars min)"; }
    }
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
    global $alertMsg, $logged;
    include View . 'chat.php';
  }
 }
?>
