<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<?php
include"bootst.php";
?>
<body>
<?php
include "header.php";
?>

<div  style="max-width:1000px">
  <img class="mySlides" src="service1.jpg" style="width:1500px;height:900px;">
  <img class="mySlides" src="service2.jpg" style="width:1500px;height:900px;">
  <img class="mySlides" src="service3.jpg" style="width:1500px;height:900px;">
  <img class="mySlides" src="service4.jpg" style="width:1500px;height:900px;">
  <img class="mySlides" src="service5.jpg" style="width:1500px;height:900px;">
  <img class="mySlides" src="service6.jpg" style="width:1500px;height:900px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4500); 
}
</script>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://www.fujisakuratech.com/">Fujisakuratech.com</a>
  </div>
</footer>
</body>
</html>