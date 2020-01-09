<link rel="stylesheet" href="../../assets/html/bootstrap.html">
<link rel="stylesheet" href="../../assets/css/cartpage.css">
<h2>Your Basket</h2>

<?php
include_once '../controller/cartPage.php';

$controller = new CartPageController();
$controller->showItems();

echo "<div>";
echo "<form action='drinksmenu.php' method='post'>";
echo "<button name='remove_button' class='btn btn-danger' type='submit'>Back</button>";
echo "</form>";
echo "</div>";

include_once '../controller/checkoutBtn.php';
include_once '../controller/checkoutBtn.php';