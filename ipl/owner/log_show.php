<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <?php 
        include("navbar.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h5 align="center" style="padding:25px;">Log in</h5>
                <!-- login -->
                <form action="actiono.php" method="post">
                    <?php
                    if (isset($_GET['error']) == 1) {
                        echo "<h5 class='text-danger'>username and password not match!</h5>";
                    }

                    ?>
                    <div class="mb-3 mt-4 ms-3 me-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter your email" name="lmail"
                            value="<?php if (isset($_COOKIE['username'])) {
                                echo $_COOKIE['username'];
                            } ?>">
                    </div>
                    <div class="mb-3 mt-4 ms-3 me-3">
                        <label for="pass" class="txt">password:</label>
                        <div class="row">
                            <div class="col-sm-10 ">
                                <input type="password" id="pass" class="form-control" placeholder="Enter your password"
                                    name="lpass" value="<?php if (isset($_COOKIE['password'])) {
                                        echo $_COOKIE['password'];
                                    } ?>">
                            </div>
                            <div class="col-sm-2 mt-3 ">
                                <i class="fas fa-eye-slash" id="check" onClick="show()"></i>
                            </div>
                        </div>
                    </div>

                    <div class="checkbox mb-3 mt-4 ms-3 me-3">
                        <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])) { ?> checked<?php } ?>>
                        &nbsp; Remember me
                    </div>
                    <div class=" mb-3 mt-4 ms-3 me-3">
                        <a href="chakmail.php" class="text-danger">Forgot Password?</a>
                    </div>
                    <div class="text-center mb-3 mt-5">
                        <input type="submit" value="Log in" class="btn btn-info" name="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>