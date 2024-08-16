<?php
    
    $connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="delete from add_player where id=$id"; 
        
        mysqli_query($connection,$query) or die("query not fire");
       
        header("location:show.php?m='Successfully Delete Player'");
       
    }

?>