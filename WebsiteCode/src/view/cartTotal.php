<?php
include "../../public/includes/session.php";
include_once '../controller/navigationController.php';

$controller = new NavController();

$var = $controller->getCartController();
echo "<h2>Your Cart: $var </h2>";
include_once '../controller/viewCartBtn.php';
$buttonController = new ButtonController();
$buttonController->ShowButton();
echo "</nav>";



?>