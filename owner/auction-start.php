<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");


$qry = "select * from auction";
$auction = mysqli_query($connection, $qry) or die("query not fire");

// header("location:navbar.php");

?>

<?php

$conn = mysqli_connect("localhost", "root", "", "ipl") or die("not connect");
$qry = "select * from auction";
$res = mysqli_query($conn, $qry) or die("not fire");

$qry = "select * from add_player ";

$qry = "select * from add_auction ";
$add_auction = mysqli_query($connection, $qry) or die("query not fire");

// $add_auction = $data->fetch_assoc();
$pid = 0;
foreach ($add_auction as $auction) {
    // print_r($auction['player_id']);
    $pid = $auction['player_id'];
}

$query = "select * from add_player where row_id='$pid'";
$data = mysqli_query($connection, $query) or die("query not fire");

$query = "select * from add_player where row_id='$pid'";
$data1 = mysqli_query($connection, $query) or die("query not fire");


// $data = mysqli_query($conn, $qry) or die("query not fire");

?>

<!-- ================================================ -->

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/online_boot/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Auction Time</title>

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

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/online_boot/carousel.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <!-- navbar ------------------------------------------------------------------------------ start nav -->
    <header data-bs-theme="">
        <div class="box" style="height: 40px;">
            <nav class="navbar navbar-expand-md fixed-top navbar-dark  bg-primary">
                <?php
                include ("navbar.php");
                ?>

 
            </nav>

        </div>

    </header>



    <!-- navbar ------------------------------------------------------------------------------ end end -->

    <!-- <div class="container">
        <marquee behavior="" direction="" bgcolor="red">IPL-Auction Timing 7 'o' Clock</marquee>
    </div> -->


    <main>

        <div class="container marketing">
            <div class="row">
                <div class="col-lg-4">

                    <?php
                    $i = 1;
                    while ($fasih = $data->fetch_assoc()) {
                        ?>
                        <div class="card" style="width: 18rem;">
                            <img src="admin/<?php echo $fasih['p_img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <h5 class="card-title"><?php echo $fasih['name'] ?></h5>
                                <h5 class="card-title">Value : <?php echo $fasih['amt'] ?></56>
                                    <h5 class="card-title">Team Player : <?php echo $fasih['t_player'] ?></56>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-8">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Value</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Player Amount To Buy">

                                
                                <div id="emailHelp" class="form-text">
                                    
                                    Enter Amount
                                <?php

                                while ($fasih = $data1->fetch_assoc()) {
                                    ?>
                                    <?php echo $fasih['amt'] ?>
                                <?php } ?>
                                Above
                            </div>


                        </div>

                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> -->
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="container">


            <table class="table table-hover">
                <thead align="center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Participate Players</th>
                        <th scope="col">Show</th>
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
                                <?php echo $fasih['country_name'] ?>

                            </td>

                            <td>
                                <?php

                                $connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

                                $rid = $fasih['row_id'];
                                $query = "select * from add_player where t_code='$rid'";
                                $d = mysqli_query($connection, $query) or die("query not fire");
                                $count = 0;
                                $c = 0;
                                while ($all = $d->fetch_assoc()) {
                                    $c++;
                                }
                                $count = $c;
                                ?>

                                <a href="">
                                    <button type="button" class="btn btn-success ps-4 pe-4">
                                        <?php print_r($count); ?>
                                    </button>
                                </a>
                            </td>
                            <td>

                                <a href="edit123.php?id=<?= $dd['id'] ?>">
                                    <button type="button" class="btn btn-primary ">
                                        Show
                                    </button>
                                </a>
                            </td>
                            </td>

                        </tr>


                    <?php } ?>

                </tbody>
            </table>
        </div> -->


        <!-- FOOTER ---------------------------------------------------------------- start -->
        <?php
        include ("footer.php");
        ?>
        <!-- FOOTER ---------------------------------------------------------------- end -->



    </main>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>