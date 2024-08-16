<!-- ================================================ -->

<!doctype html>
<html lang="en" data-bs-theme="auto">

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
    <link href="../assets/online_boot/carousel.css" rel="stylesheet">
</head>

<body>

    <header data-bs-theme="">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <?php
            include("navbar.php");
            ?>
        </nav>
    </header>
 


    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h5 align="center" style="padding:25px;">Log in</h5>
                <!-- login -->
                <form action="login_action.php" method="post">
                    <?php
                    if (isset($_GET['error']) == 1) {
                        echo "<h5 class='text-danger'>username and password not match!</h5>";
                    }

                    ?>
                    <div class="mb-3 mt-4 ms-3 me-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter your email" name="lmail" value="<?php if (isset($_COOKIE['username'])) {
                                                                                                                                    echo $_COOKIE['username'];
                                                                                                                                } ?>">
                    </div>
                    <div class="mb-3 mt-4 ms-3 me-3">
                        <label for="pass" class="txt">password:</label>
                        <div class="row">
                            <div class="col-sm-10 ">
                                <input type="password" id="pass" class="form-control" placeholder="Enter your password" name="lpass" value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                                                echo $_COOKIE['password'];
                                                                                                                                            } ?>">
                            </div>
                            <div class="col-sm-2 mt-3 ">
                                <i class="fas fa-eye-slash" id="check" onClick="show()"></i>
                            </div>
                        </div>
                    </div>
 
                    <div class=" mb-3 mt-4 ms-3 me-3">
                        <a href="chakmail.php" class="text-danger">Forgot Password?</a>
                    </div>
                    <div class=" mb-3 mt-4 ms-3 me-3">
                        <a href="registration.php" class="text-danger">Dont Have Any Account</a>
                    </div>

                    <div class="text-center mb-3 mt-5">
                        <input type="submit" value="Log in" class="btn btn-info" name="login">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- FOOTER ---------------------------------------------------------------- start -->
    <?php
    include("footer.php");
    ?>
    <!-- FOOTER ---------------------------------------------------------------- end -->



    </main>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
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