
<?php 

$connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

if(isset($_POST['xregister'])) //update data
    {
        $id=$_POST["xid"];
        $name=$_POST["xname"];
        $email=$_POST["xemail"];
        // $contect=$_POST["contect"];
        $password=$_POST["xpassword"];
        $logo=$_FILES["xlogo"];

        
        $file1=explode(".",$_FILES['xfile']['name']);
        $filename="image/".uniqid().".".$file1[1];
        $img_upl=move_uploaded_file($_FILES['xfile']['tmp_name'],$filename);
        
        $qry="update owners set name='$name',email='$email',password='$password',logo='$filename' where id=$id";
        mysqli_query($connection,$qry) or die("not fire");
        header("location:show.php");
}

?>
    <!-- if(isset($_POST['xregister'])) //update data
    {
        $id=$_POST["xid"];
        $name=$_POST["name"];
        $mail=$_POST["mail"];
        $contect=$_POST["contect"];
        $password=$_POST["passwords"];
        $img=$_FILES["img"];

        
        $file=explode(".",$_FILES['img']['name']);
        $filename="image/".uniqid().".".$file[1];
        $img_upl=move_uploaded_file($_FILES['img']['tmp_name'],$filename);
        
        $qry="update registerdata set name='$name',email='$mail',contect='$contect',password='$password',image='$filename' where id=$id";
        mysqli_query($conn,$qry) or die("not fire");
        header("location:regshow.php");
    } -->