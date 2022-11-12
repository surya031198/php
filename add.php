<!DOCTYPE html>
<html lang="en">
<header>
<link rel="stylesheet" href="edit.css">
</header>
<head>
  <title>Add Data Using AJAX</title>
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
<div class="container py-5">
  <h2>Add Blog</h2>
  <p class="text-right"><a href="blog.php" class="btn btn-primary">View All Blogs</a></p>
  <form>
  <div class="form-group">
  <label for ="id">Username:</label>
  <input type="text" class="form-control usernamecls" id="username" name="username">
  </div>
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control titlecls" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea class="form-control descriptioncls" id="description" name="description"></textarea>
    </div>
  
    <button type="button" id="save" class="btn btn-primary">Submit</button>
  </form>
</div>


<script>
$('#save').click(function () {

$username =$(".usernamecls").val();
$title = $(".titlecls").val();
$desc = $(".descriptioncls").val();

alert($username);
alert($title);
alert($desc);

$.ajax({url:"insert.php",
method:"POST",
data:{usernamecol:$username,titlecol:$title,desccol:$desc},
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
