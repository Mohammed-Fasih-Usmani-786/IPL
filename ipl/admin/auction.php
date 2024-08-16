<?php

$conn = mysqli_connect("localhost", "root", "", "ipl") or die("not connect");
$qry = "select * from auction";
$res = mysqli_query($conn, $qry) or die("not fire");

$qry = "select * from add_player ";

$data = mysqli_query($conn, $qry) or die("query not fire");

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
    <title>Auction Page</title>

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





    <?php
    foreach ($res as $v) {
    ?>
        <?php
        if ($v['status'] == "True") { ?>
            <marquee behavior="" direction="" bgcolor="green">
                <h1>Auction Is Start</h1>
            </marquee>
            <div class="container">



                <h1 class="text-center p-3">Start Auction Yes Or No Please Select Your Choice:-</h1>
                <div class="row">
                    <div class="col-md-6 ">
                        <form action="action.php" method="post" enctype="multipart/form-data" class="p-3">

                            <div class="mb-3 mt-3">

                                <select name="status" id="">
                                    <option selected disabled>Start auction</option>
                                    <option value="True">Start</option>
                                    <option value="Flase">Close</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="start">Start</button><br><br>

                        </form>
                    </div>

                </div>
            </div>
            <div class="container">

                <h1>Add Player To Auction Start</h1>

                <table class="table table-hover">
                    <thead align="center">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>
                            <th scope="col">Country</th>
                            <th scope="col">Image</th>
                            <th>Start</th>

                        </tr>
                    </thead>
                    <tbody align="center">

                        <?php
                        $i = 1;
                        while ($fasih = $data->fetch_assoc()) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>

                                </td>
                                <td>
                                    <?php echo $fasih['name'] ?>

                                </td>
                                <td>
                                    <?php echo $fasih['amt'] ?>

                                </td>
                                <td>
                                    <?php echo $fasih['t_player'] ?>

                                </td>
                                <td>

                                    <!-- <?php echo $fasih['p_img'] ?> -->
                                    <img src="<?php echo $fasih['p_img'] ?>" height="50px" width="50px">
                                </td>
                                <td>
                                    <a href="add_auction.php?player_id=<?php echo $fasih['row_id'] ?>">
                                        <button type="submit" class="btn btn-danger">Start</button>
                                    </a>
                                </td>

                            </tr>


                        <?php } ?>

                        <!-- <button type="submit" class="btn btn-primary" name="start">Start</button><br><br> -->



                    </tbody>
                </table>
            </div>

        <?php } else { ?>
            <marquee behavior="" direction="" bgcolor="red">
                <h1>Auction Not Start</h1>
            </marquee>
            <div class="container">



                <h1 class="text-center p-3">Start Auction Yes Or No Please Select Your Choice:-</h1>
                <div class="row">
                    <div class="col-md-6 ">
                        <form action="action.php" method="post" enctype="multipart/form-data" class="p-3">

                            <div class="mb-3 mt-3">

                                <select name="status" id="">
                                    <option selected disabled>Start auction</option>
                                    <option value="True">Start</option>
                                    <option value="Flase">Close</option>

                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary" name="start">Submit</button><br><br>

                        </form>
                    </div>

                </div>
            </div>

            <hr>

        <?php }
        ?>


    <?php } ?>

  

    <h1>
        <div id="countdown">
                
        </div>
    </h1>

    <div id="startButtons">
        <button id="gameStart" type="submit" class="btn btn-primary">Get Going!</button>
    </div>

    <script>
        document.getElementById("gameStart").addEventListener("click", function() {
            var timeleft = 10;

            var downloadTimer = setInterval(function function1() {
                document.getElementById("countdown").innerHTML = timeleft +
                    "&nbsp" + "seconds remaining";
                    // window.localstorage.setItem("tt",timeleft);
                    // window.location="../auction-start.php";

                timeleft -= 1;
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("countdown").innerHTML = "Time is up!"
                }
            }, 1000);

            console.log(countdown);
        });
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