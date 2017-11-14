<?php
  function getUserId($username) { 
    global $DB;
    $do = "SELECT ID FROM my_users WHERE username = '".$username."'"; 
    try { 
      $try = $DB->query($do); $try = $try->fetch(); $try = $try[0]; 
      return $try; 
    } catch(Exception $e) {echo("Error getUserId : ".$e->getMessage());die();} 
  }

  function getUserById($thisID) {
    global $DB;
    $do = "SELECT username FROM my_users WHERE ID = '".$thisID."'";
    try {
      $try = $DB->query($do); $try = $try->fetch(); $try = $try[0];
      return $try;
    } catch(Exception $e) {echo("Error getUserById : ".$e->getMessage());die();}
  }

  function getChatPost() {
    global $getChat;
    foreach ($getChat as $thisQuery) 
    { // Exécuter $getNews sous le tableau $thisQuery
      $c_author = "<b>".ucfirst(htmlspecialchars(getUserById($thisQuery["user_id"])))."</b>";
      $c_message = htmlspecialchars($thisQuery["message"]);
      $c_date = "<i>".$thisQuery["datepost"]."</i>";
      echo 
      "       <p class=\"chatmsg\">"."<span class=\"chatdate\">[".$c_date."]</span> ".$c_author." > ".$c_message."</p>
      ";
    }
  }
?>