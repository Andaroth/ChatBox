<?php
  function getUserById($thisID) {
    global $DB;
    $do = "SELECT username FROM my_users WHERE ID = '".$thisID."'";
    try {
      $try = $DB->query($do); $try = $try->fetch(); $try = $try[0];
      return $try;
    } catch(Exception $e) {echo("Error getUserById : ".$e->getMessage());die();}
  }
?>