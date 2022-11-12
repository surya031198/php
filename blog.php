<?php
include("connection.php");



if(isset($_GET['del_id']))
{
	$id=$_GET['del_id'];
	
	$sql="delete from posts where id='".$id."'";
	$result=mysqli_query($conn,$sql);
	
	header('location:blog.php');
	
}

?>


<!DOCTYPE html>
<html lang="en">
<header>
<link rel="stylesheet" href="blog.css">
</header>
<?php
include"bootst.php";
?>
<body>
<?php
include "header.php";
?>

</div>
<div class="container-fluid py-5">
<div class="row">
<div class="col-lg-8">
<h1 class="text-center">Select Data Using AJAX</h1>
<p class="text-right">
	<a href="add.php" class="btn btn-primary">Add Blog</a>
</p>
<table class="table table-bordered table-striped" id="content">
</table>
</div>

<div class="col-lg-4">
</div>
</div>
</div>


<script>
$(document).ready(function(){
$.ajax({url:"select.php",
success:function(dataabc){
		//console.log(dataabc);
	$("#content").html(dataabc);		
}});


});
</script>
<br><br><br><br><br><br><br><br><br>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://www.fujisakuratech.com/">Fujisakuratech.com</a>
  </div>
</footer>

</body>
</html>

