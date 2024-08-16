<?php
    
    $connection = mysqli_connect("localhost","root","","db") or die("not connected");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="delete from tab2 where id=$id"; 
        
        mysqli_query($connection,$query) or die("query not fire");
       
        header("location:show.php");
       
    }




?>