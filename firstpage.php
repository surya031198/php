<html>
<header>
<link rel="stylesheet" href="firstpage.css">
</header>
<video autoplay loop poster="polina.jpg" id="vid"  controls muted>
<source src="fuji.webm" type="video/webm">
<source src="fuji.mp4" type="video/mp4">
</video>
<?php
include"bootst.php";
?>
<body>
<?php
include "header.php";
?>
<style>
.container {
  height: 200px;
  position: relative;
  
  padding-top: 600px; 
  padding-left: 1200px; 
  }

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
<script>
function myFunction() {
  location.replace("blog.php")
}
</script>
<?php
include"break.php";
?>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://www.fujisakuratech.com/">Fujisakuratech.com</a>
  </div>
</footer>

</body>
</html> 
