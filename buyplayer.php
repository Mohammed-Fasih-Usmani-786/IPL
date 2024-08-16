<?php

session_start();

// $ow_id = $_SESSION['rid'];
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

$query = "select * from add_player ";
$p = mysqli_query($connection, $query) or die("query not fire");

$query = "select * from bid ";
$d = mysqli_query($connection, $query) or die("query not fire");

$query = "select * from owners ";
$o = mysqli_query($connection, $query) or die("query not fire");

$data = [];
$i = 0;

foreach ($p as $v) {
    $j = 0;
    $d2 = [];
    foreach ($d as $v1) {
        if ($v['row_id'] == $v1['p_id']) {
            $row_id = $v['row_id'];
            $query = "select * from add_player where row_id='$row_id'";
            $d1 = mysqli_query($connection, $query) or die("query not fire");
            foreach ($d1 as $dd) {
                $d2[$j] = $dd;
                $j++;
            }
            $data[$i] = $d2;
        }
    }
    $i++;
}

$name = [];
$i = 0;

foreach ($d as $v) {
    $j = 0;
    $d2 = [];
    foreach ($o as $v1) {
        if ($v['ow_id'] == $v1['row_id']) {
            $row_id = $v1['row_id'];
            $query = "select * from owners where row_id='$row_id'";
            $d1 = mysqli_query($connection, $query) or die("query not fire");
            foreach ($d1 as $dd) {
                $d2[$j] = $dd;
                $j++;
            }
            $name[$i] = $d2;
        }
    }
    $i++;
}



// header("location:navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="assets/online_boot/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Show Players</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/"> -->



    <link href="assets/online_boot/online.css" rel="stylesheet">

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <link href="assets/online_boot/carousel.css" rel="stylesheet">
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

    

    <!-- <?php foreach ($name[0] as $v) {  ?>

        <h1> <?php print_r($v['name']); ?> </h1>

    <?php } ?> -->

    <div class="container">


        <table class="table table-hover">
            <thead align="center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Country</th>
                    <th scope="col">Buy Team</th>
                    <th scope="col">Image</th>
                    <!-- <th scope="col">Delete</th> -->
                    <!-- <th scope="col">Edit</th> -->
                </tr>
            </thead>
            <tbody align="center">

                <?php
                $i = 1;
                $j=0;
                foreach ($data as $fasih) {
                ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>

                        </td>
                        <td>
                            <?php echo $fasih[0]['name'] ?>

                        </td>
                        <td>
                            <?php echo $fasih[0]['amt'] ?>

                        </td>
                        <td>
                            <?php echo $fasih[0]['t_player'] ?>

                        </td>
                        <td>
                             <?php 
                            
                             foreach ($name[$j] as $v) {  ?>  
                                <?= $v['name']; ?>
                                <span>
                                    <?php $j++; ?>
                                </span>
                                <?php } ?> 
                            
                        </td>
                        <td>

                            <!-- <?php echo $fasih[0]['p_img'] ?> -->
                            <img src="admin/<?php echo $fasih[0]['p_img'] ?>" height="50px" width="50px">
                        </td>



                    </tr>


                <?php } ?>

            </tbody>
        </table>
    </div>



</body>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>