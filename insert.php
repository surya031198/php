<?php
include("connection.php");

$username= $_POST['usernamecol'];
$title= $_POST['titlecol'];
$desc=$_POST['desccol'];
$adddate=date('Y-m-d');


$sql ="insert into posts(username,title,description,post_at) values ('".$username."','".$title."','".$desc."','".$adddate."')";

mysqli_query($conn,$sql);


?>