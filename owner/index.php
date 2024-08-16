<?php

session_start();
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

$qry="select * from owners";
$d=mysqli_query($connection,$qry) or die ("not fire");

// ====================================================================================== 11111Afganistan Player
$ind = "11111Afganistan";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");
$count=[];
$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[0]=$c;

// ====================================================================================== 22222Australia Player
$ind = "22222Australia";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[1]=$c;

// ====================================================================================== 33333Bangladesh Player
$ind = "33333Bangladesh";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[2]=$c;

// ====================================================================================== 44444England Player
$ind = "44444England";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[3]=$c;

// ====================================================================================== 55555India Player
$ind = "55555India";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[4]=$c;

// ====================================================================================== 66666Newzeland Player
$ind = "66666Newzeland";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[5]=$c;

// ====================================================================================== 77777Westindies Player
$ind = "77777Westindies";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[6]=$c;


// ====================================================================================== 88888SouthAfrica Player
$ind = "88888SouthAfrica";
$query = "select * from add_player where t_code='$ind'";
$ind = mysqli_query($connection, $query) or die("query not fire");

$c=0;
while ($fasih = $ind->fetch_assoc()) {
   $c++;
}
$count[7]=$c;



if(isset ($_SESSION['user']) and $_SESSION['status']== true){
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

    <style>
        .my_hover:hover {
            background-color: lightblue;
            /* .my_hover:hover{} */
        }
    </style>


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

    <!-- <h1>
        <?php print_r($_SESSION['user']); ?>
    </h1> -->
    <h1>
       WelCome: <?php print_r($_SESSION['name']); ?>
    </h1>
    <!-- <h1>
    <?php print_r($_SESSION['password']); ?>
    </h1> -->

    <!-- <h1>
    <?php print_r($_SESSION['logo']); ?>
    </h1> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total Afganistan Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[0] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total Australia Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[1] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total Bangladesh Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[2] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total England Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[3] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total India Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[4] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total Westindies Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[5] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total Newzeland Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[6] ?></div>
                </div>
            </div>
            <div class="col-sm-4 border my_hover">
                <div class="row p-3">
                    <div class="col-12">Total SouthAfrica Player</div>
                    <div class="col-12">Add:&nbsp;&nbsp;<?php echo $count[7] ?></div>
                </div>
            </div>
            

        </div>
    </div> -->

</body>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

<?php

    }else {
        // echo "Your Are L";
        header("location:../login.php");
}