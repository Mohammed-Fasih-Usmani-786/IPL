<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "ipl") or die("not connect");
$qry = "select * from player_country";
$res = mysqli_query($conn, $qry) or die("not fire");

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
        <h1 class="text-center p-3">Add Players</h1>
        <div class="row">
            <div class="col-md-6 ">
                <form action="action.php" method="post" enctype="multipart/form-data" class="p-3">
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter Player Name" name="name">
                    </div>
                    <div class="mb-3 mt-3">

                        <input type="" class="form-control" id="email" placeholder="Enter Player Value" name="amt">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="">Player Image</label>
                        <input type="file" class="form-control" name="p_img">
                    </div>
                    <div class="mb-3 mt-3">

                        <select name="t_code" id="">
                            <option selected disabled>Player Add Country</option>
                            <?php foreach ($res as $v) {  ?>
                                <option value="<?= $v['row_id']; ?>"> <?= $v['country_name']; ?></option>
                                <!-- <?= $v['row_id']; ?> -->

                            <?php }   ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="addplayer">Submit</button><br><br>
                    <!-- <a href="login.php">I have Already Login</a> -->
                </form>
            </div>
            <div class="col-md-6">
                <img src="../image/team_logo/title.jpg" alt="" height="70%" width="40%">
            </div> 
        </div>
    </div> 
    <hr> 


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