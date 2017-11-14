<?php
/* DataBase */
$dbhost = "localhost";
$dbname = "chatbox";
$dbuser = "chatroot";
$dbpass = "user";
/* Reach DB */
try {
  $DB = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  die('Error : '.$e->getMessage());
}
/* SQL Queries */ 
$getChat = $DB->query("SELECT * FROM shoutbox ORDER BY datepost DESC LIMIT 10");
/* UI messages */
$alertMsg = "";
