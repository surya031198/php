<?php
include("connection.php");

$id = $_POST['postid'];
$username=$_POST['usernamecol'];
$title= $_POST['titlecol'];
$desc=$_POST['desccol'];


//echo $id;

$sql ="UPDATE posts SET username='".$username."',title='".$title."',description='".$desc."' where id='".$id."'";

mysqli_query($conn,$sql);



?>