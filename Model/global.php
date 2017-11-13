<?php
/* DataBase */
$dbhost = "localhost";
$dbname = "ChatBox";
$dbuser = "root";
$dbpass = "user";
/* SQL Queries */
$getChat = $db->query("SELECT * FROM shoutbox ORDER BY datepost DESC LIMIT 10");