<?php
    include("../../public/includes/session.php");
?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}

.bgimg {
    background-position: center;
  background-size: cover;
  background-image: url("../../assets/img/cafe.jpg");
  min-height: 75%;
}

.menu {
    display: none;
}
</style>
<body>

<?php
include_once "../../public/includes/topBar.php";
?>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 6am to 8pm!</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">la<br>Boof</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Robbins Halls of Residence, PL4 8BZ</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->

<!-- About Container -->
<div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
        <p>la Boof is a classic Devonshire cafe inspired by the vast rolling hills of the countryside and the animals that graze them.</p>
        <p>From these animals, we produce the finest of dairy snacks and drinks including our world class BoofTea.</p>
        <div class="w3-panel w3-leftbar w3-light-grey">
            <p><i>"Sometimes, simplicity is best"</i></p>
            <p>Chef, Coffeeist and Owner: Randy Orton</p>
        </div>
        <img src="../../assets/img/cafe.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
        <p><strong>Opening hours:</strong> 6am to 8pm daily.</p>
        <p><strong>Address:</strong> Robbins Halls of Residence, PL4 8BZ/p>
    </div>
</div>
<!-- End page content -->

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>