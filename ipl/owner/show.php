<?php

$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

$qry = "select * from add_player ";

$data = mysqli_query($connection, $qry) or die("query not fire");

// header("location:navbar.php");

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


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Country</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>

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
                            <a href="delete.php?id=<?php echo $fasih['id'] ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                        <td>
                            <!-- <a href="delete.php?row_id=<?php echo $fasih['row_id'] ?>">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a> -->
                            <a href="edit.php?id=<?php echo $fasih['id'] ?>">edit</a>
                        </td>
                        </td>

                    </tr>


                <?php } ?>

            </tbody>
        </table>
    </div>


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