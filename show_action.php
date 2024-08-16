<?php 


$connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

$qry= "insert into owners set name='$name',email='$email',password='$password',logo='$file'";

mysqli_query($connection,$qry) or die("query not fire");

// header("location:navbar.php");

?>