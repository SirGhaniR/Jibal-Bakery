<?php
session_start();
// Front Controller
require_once 'app/controllers/BaseController.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/AboutController.php';
require_once 'app/controllers/ContactController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($page) {
  case 'home':
    $controller = new HomeController();
    break;
  case 'product':
    $controller = new ProductController();
    break;
  case 'about':
    $controller = new AboutController();
    break;
  case 'contact':
    $controller = new ContactController();
    break;
  default:
    $controller = new HomeController();
    break;
}

if (method_exists($controller, $action)) {
  $controller->$action();
} else {
  $controller->index();
}
