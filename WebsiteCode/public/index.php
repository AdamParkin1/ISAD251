<?php
include(dirname(__FILE__) . "/includes/session.php");
include_once "../assets/html/bootstrap.html";
//include_once "../src/view/cartTotal.php";
include_once '../src/view/homepage.php';
$var = $_SERVER['DOCUMENT_ROOT'];
echo "<script>console.log('Debug Objects: " . $var . "' );</script>";
?>
