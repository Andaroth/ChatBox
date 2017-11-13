<?php 
  define('Model', 'Model/');
  define('View', 'View/');
  define('Controller', 'Controller/');

  require_once Model . 'global.php';

  try {
    $DB = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    // die('Error : '.$e->getMessage());
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./View/css/style.css">
    <title>Login</title>
  </head>

  <body>
    <?php
      $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
      switch ($page) {
        case 'login':
          include(Controller . 'loginController.php');
          $controller = new loginController();
          break;
        case 'chat':
          include(Controller . 'chatController.php');
          $controller = new chatController();
          break;
        case 'register':
          include(Controller . 'registerController.php');
          $controller = new registerController();   
        default:
          include(Controller . 'loginController.php');
          $controller = new loginController();
          break;
      }
      $controller->run();
    ?>
    <script type="text/javascript" src="views/js/app.js"></script>
  </body>
</html>
