<!DOCTYPE html>
 <?php 
  session_start();
  define('Model', 'Model/');
  define('View', 'View/');
  define('Controller', 'Controller/');
  require_once Model . 'global.php';
  require_once Model . 'functions.php';
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./View/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel%7CLobster" rel="stylesheet">
    <title>Chat Boîte</title>
  </head>

  <body>
    <?php include Controller . 'routerController.php'; ?>
    <script type="text/javascript" src="./View/js/app.js"></script>
  </body>
</html>
