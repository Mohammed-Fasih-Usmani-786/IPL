<?php

$connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

if (isset($_POST['login'])) 
{
    $m=1;
    $email = $_POST["lmail"];
    $pass = $_POST["lpass"];

    $_SESSION['user'] = $email;

    $_SESSION['status'] = true;

    $qry = "select * from admin where email='$email' and pass='$pass'";
    mysqli_query($connection, $qry) or die("not fire");


    if (mysqli_affected_rows($connection)) 
    {
        header("location:regshow.php");

    }
   
    else {
           
        header("location:login.php?m=1");
    }
}

?>