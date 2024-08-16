<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <?php
    include("navbar.php")
        ?>


    <div class="container">
        <form action="action.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3 mt-3">
                <!-- <label for="email" class="form-label">Email:</label> -->
                <input type="file" class="form-control" id="file" placeholder="Enter password" name="logo">
            </div>
            <button type="submit" class="btn btn-primary" name="reg">Submit</button><br><br>
            <a href="login.php">I have Already Login</a>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
