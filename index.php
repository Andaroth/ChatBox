<?php 
  define('View', 'View/');
  define('Controller', 'Controller/');

  try {
    $DB = new PDO('mysql:host=localhost;dbname=ChatBox;charset=utf8','root','user');
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    die('Error : '.$e->getMessage());
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
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
        default:
          include(Controller . 'loginController.php');
          $controller = new loginController();
          break;
      }
      $controller->run();
    ?>
  </body>
</html>
