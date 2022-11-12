<?php 

include_once('connection.php');

$id = $_GET['edit_id'];
$sql = "select * from posts where id='".$id."'";
$result = mysqli_query($conn,$sql);

$data=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<header>
<link rel="stylesheet" href="edit.css">
</header>
<head>
  <title>Update Using AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "header.php";
?>
<br>
<div class="container">
  <h2>Edit Data</h2>
   <p class="text-right"><a href="blog.php" class="btn btn-primary">View All Blogs</a></p>
  <form>
   <div class="form-group">
      <label for="username">Username:</label>
      <textarea class="form-control" id="username"><?php echo $data['username'];?></textarea>
    </div>
	
    <div class="form-group">
	<input type="hidden" id="postid" value="<?php echo $_GET['edit_id'];?>">
      <label for="email">Title:</label>
      <input type="text" class="form-control" id="title" value="<?php echo $data['title'];?>" >
    </div>
	
	   <div class="form-group">
      <label for="desc">Description:</label>
      <textarea class="form-control" id="description"><?php echo $data['description'];?></textarea>
    </div>
	

 
    <button type="button" id="save" class="btn btn-primary">Submit</button>
  </form>
</div>




<script>
$('#save').click(function () {

$id=$("#postid").val();

//alert($id);
$username = $("#username").val();
$title = $('#title').val();
$desc = $("#description").val();



$.ajax({url:"update.php",
method:"POST",
data:{postid:$id,usernamecol:$username,titlecol:$title,desccol:$desc},
success:function(dataabc){
window.location.href="blog.php";
}});


});



</script>
<br><br><br><br><br><br>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://www.fujisakuratech.com/">Fujisakuratech.com</a>
  </div>
</footer>


</body>
</html>
