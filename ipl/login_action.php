<?php

$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");
session_start();
if (isset($_POST['login'])) {
    // $m=1;
    $mail = $_POST["lmail"];
    $pass = $_POST["lpass"];

    $_SESSION['user'] = $mail;
    // $_SESSION['name'] = $name;

    $_SESSION['status'] = true;

    $qry = "select * from owners where email='$mail' and password='$pass'";
    $d = mysqli_query($connection, $qry) or die("not fire");

    $r=mysqli_fetch_assoc($d);
    $name=$r['name'];
    $logo=$r['logo'];
    $rid=$r['row_id'];
    $_SESSION['name'] = $name;
    $_SESSION['logo'] = $logo;
    $_SESSION['rid'] = $rid;
    // print_r($v);

    // print_r($d);



    if (mysqli_affected_rows($connection)) {
        header("location:owner/index.php");
    } else {

        header("location:login.php?m='Not Valid Email Or Password'");
    }
}
// header("location:login.php");
