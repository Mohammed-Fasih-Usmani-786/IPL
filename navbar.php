<?php

// session_start();
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");


$qry = "select * from auction";
$res = mysqli_query($connection, $qry) or die("query not fire");

// header("location:navbar.php");

?>


<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/team_logo/logo.png" alt="" height="40px" width="100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="team-players.php">Team Players</a>
                </li>

                <?php
                foreach ($res as $v) {
                ?>
                    <?php
                    if ($v['status'] == "True" || !empty($_SESSION['name'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="auction-start.php">Auction Start</a>
                        </li>
                    <?php } else { ?>

                    <?php   }
                    ?>


                <?php } ?>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="buyplayer.php">Sold Out Players</a>
                </li>

            </ul>
        </div>



        <form class="d-flex" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

            <?php if (!empty($_SESSION['name'])) {  ?>
                <a href="" class="btn btn-outline-dark m-1" type="submit"><?php print_r($_SESSION['name']); ?></a>

                <a href="owner/index.php" class="btn btn-outline-dark m-1" type="submit">DashBoard</a>
            <?php } else { ?>
                <a href="login.php" class="btn btn-outline-dark" type="submit">Login</a>
            <?php  } ?>
        </form>

    </div>
</div>