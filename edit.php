<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "db") or die("not connect");

$qry = "select * from owners where id=$id";

$res = mysqli_query($conn, $qry) or die("not fire");

$row = mysqli_fetch_array($res);
?>

<?php
include("navbar.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form method="post" action="action.php"> -->

        <!-- <input type="hidden" value="<?php echo $row['id']; ?>" name="xid"> -->

        <!-- <div class="mb-3 mt-4 ms-3 me-3">
        <label for="name" class="form-label">Name:</label>
        <input type="name" id="name" class="form-control" placeholder="Enter your name" name="name"  >
    </div>

    <div class="mb-3 mt-4 ms-3 me-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" class="form-control" placeholder="Enter your email" name="mail" value="<?php echo $row['email']; ?>">
    </div>

    <div class="mb-3 mt-4 ms-3 me-3">
        <label for="contect" class="form-label">Contect:</label>
        <input type="contect" id="contect" class="form-control" placeholder="Enter your contect" name="contect" value="<?php echo $row['contect']; ?>">
    </div>

    <div class="mb-3 mt-4 ms-3 me-3">
        <label for="pass" class="txt">password:</label>
        <input type="password" id="passs" class="form-control" placeholder="Enter your password" name="passwords" value="<?php echo $row['password']; ?>">
    </div>
   
    <div  class="mb-3 mt-4 ms-3 me-3" >
          <input type="checkbox" id="check" onClick="shoow()">
          
    </div> -->

        <div class="container">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $row['id']; ?>" name="xid">

                <div class="mb-3 mt-3">
                    <!-- <label for="email" class="form-label">Email:</label> -->
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="xname" value="<?php echo $row['name']; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <!-- <label for="email" class="form-label">Email:</label> -->
                    <input type="" class="form-control" id="email" placeholder="Enter email" name="xemail" value="<?php echo $row['email']; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <!-- <label for="email" class="form-label">Email:</label> -->
                    <input type="password" class="form-control" id="passs" placeholder="Enter password" name="xpassword" value="<?php echo $row['password']; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <!-- <label for="email" class="form-label">Email:</label> -->
                    <input type="file" class="form-control" id="file" placeholder="Enter password" name="xlogo" value="<?php echo $row['logo']; ?>">
                </div>
                <div  class="mb-3 mt-4 ms-3 me-3" >
                          <input type="checkbox" id="check" onClick="shoow()">
                          Show password
                </div>

                <button type="submit" class="btn btn-primary" name="xregister">Submit</button>
            </form>

        </div>


    
</body>

<script>
         function shoow() {
            a = document.getElementById("passs")
        
            if (a.type == "password") {
                a.type = "text";
        
            }
            else {
        
                a.type = "password";
        
            }
        
        }
    </script>


</html>