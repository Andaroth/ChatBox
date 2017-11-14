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