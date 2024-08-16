<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "ipl") or die("not connect");

$qry = "select * from add_player where id=$id";

$res = mysqli_query($conn, $qry) or die("not fire");

$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <script src="../assets/online_boot/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Carousel Template · Bootstrap v5.3</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/"> -->



    <link href="../assets/online_boot/online.css" rel="stylesheet">

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <link href="../assets/online_boot/carousel.css" rel="stylesheet">
</head>

<body>

    <header data-bs-theme="">
        <div class="box" style="height: 40px;">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
                <?php
                include("navbar.php");
                ?>
            </nav>
        </div>
    </header>


    <div class="container">
        <form action="action.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="xid">

            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="xname" value="<?php echo $row['name']; ?>">
            </div>
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="" class="form-control" id="email" placeholder="Enter email" name="xamt" value="<?php echo $row['amt']; ?>">
            </div>
            
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="file" class="form-control" id="file" name="xp_img" >
            </div>
            <!-- <div class="mb-3 mt-4 ms-3 me-3">
                <input type="checkbox" id="check" onClick="shoow()">
                Show password
            </div> -->

            <button type="submit" class="btn btn-primary" name="xregister">Submit</button>
        </form>

    </div>



</body>

<script>
    function shoow() {
        a = document.getElementById("passs")

        if (a.type == "password") {
            a.type = "text";

        } else {

            a.type = "password";

        }

    }
</script>


<?php
if (isset($_GET['m'])) {
    $m = $_GET['m'];
    if (empty($m)) {
    } else {
        echo '<script>alert("' . $m . '");</script>';
    }
}
?>
</body>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>