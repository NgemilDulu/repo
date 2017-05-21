<?php
  include "c_admin.php";

  $controller = new c_admin();

  if (empty($_SESSION['username'])) {
    $controller->viewLogin();
  } else {
    if (isset($_GET['l'])) {
      $controller->logout();
    } else if(isset($_GET['d'])) {
      $id = $_GET['d'];
      $controller->deleteUser($id);
    } else if (isset($_GET['a'])) {
      $controller->viewAds();
    } else if(isset($_GET['u'])) {
      $controller->viewUser();
    } else {
      $controller->viewUser();
    }
  }
 ?>