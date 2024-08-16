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
    <title>Carousel Template · Bootstrap v5.3</title>

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


    <!-- <style>
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
    </style> -->


    <!-- Custom styles for this template -->
    <link href="assets/online_boot/carousel.css" rel="stylesheet">
</head>

<body>

    <header data-bs-theme="">
    <div class="box" style="height: 40px;">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IPL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <a href="admin-login.php" class="btn btn-outline-dark" type="submit">Admin Login</a>
                    </form>

                </div>
            </div>
        </nav>
    </div>

        <div class="container">
            <h1 class="text-center p-3">Team Owner Registration</h1>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <form action="action.php" method="post" enctype="multipart/form-data" class="text-center p-3">
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter Owner Name" name="name">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="" class="form-control" id="email" placeholder="Enter Owner Email" name="email">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="password" class="form-control" id="check" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control"  placeholder="Enter budget" name="budget">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="">Team Logo</label>
                            <input type="file" class="form-control" id="file" placeholder="Enter password" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary" name="reg">Submit</button><br><br>
                        <a href="login.php">I have Already Login</a> 
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="image/team_logo/title.jpg" alt="" height="70%" width="50%">
                </div>
            </div>
        </div>
        <hr>


        <!-- FOOTER ---------------------------------------------------------------- start -->
        <?php
        include("footer.php");
        ?>
        <!-- FOOTER ---------------------------------------------------------------- end -->



        </main>
        <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            if (empty($m)) {
                
            } else {
                echo '<script>alert("' . "This Email Already Use" . '");</script>';
            }
        }
        ?>
        <script>
            a = 0;


            function show() {
                x = document.getElementById("check")

                if (a == 0) {
                    pass.type = "text";
                    x.className = "fas fa-eye";

                    a = 1;

                } else {

                    pass.type = "password";
                    x.className = "fas fa-eye-slash";

                    a = 0;
                }

            };



            function shoow() {
                a = document.getElementById("passs")

                if (a.type == "password") {
                    a.type = "text";

                } else {

                    a.type = "password";

                }

            }
        </script>
</body>

</html>