<?php

$connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

if (isset($_POST['login'])) //login
{
    $mail = $_POST["lmail"];
    $pass = $_POST["lpass"];

    $_SESSION['user'] = $mail;

    $_SESSION['status'] = true;

    $qry = "select * from owners where email='$mail' and password='$pass'";
    mysqli_query($connection, $qry) or die("not fire");


    if (mysqli_affected_rows($connection)) 
    {
        header("location:regshow.php");

    }
        
    else {
        header("location:index.php?error=1");
    }
}
?>