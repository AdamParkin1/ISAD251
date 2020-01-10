<?php
include "../../public/includes/session.php";
include_once "../../assets/html/bootstrap.html";
include_once '../../public/includes/cartTotal.php';
include_once "../../public/includes/sidebar.php";


?>

<link rel="stylesheet" href="../../assets/css/landing.css">
<link rel="stylesheet" href="../../assets/css/drinksmenu.css">


<?php
include_once '../model/getDrinks.php';
include_once '../model/DbContext.php';
include_once '../controller/drinkMenu.php';
//print_r($_SESSION);

$drinkController = new Controller();
$drinkController->GetDbItems();

?>