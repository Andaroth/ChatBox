<!DOCTYPE html>
 <?php 
  session_start();
  define('Model', 'Model/');
  define('View', 'View/');
  define('Controller', 'Controller/');

  require_once Model . 'global.php';
  require_once Model . 'functions.php';
  try {
    $DB = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    die('Error : '.$e->getMessage());
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./View/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel%7CLobster" rel="stylesheet">
    <title>Login</title>
  </head>

  <body>
    <?php include Controller . 'routerController.php'; ?>
    <script type="text/javascript" src="./View/js/app.js"></script>
  </body>
</html>
