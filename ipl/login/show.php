<?php

$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

$qry = "select * from owners ";

$data = mysqli_query($connection, $qry) or die("query not fire");

// header("location:navbar.php");

?>

<?php
include("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Gmail</th>
                <th scope="col">Password</th>
                <th scope="col">File</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($fasih = $data->fetch_assoc()) {
                ?>
                <tr>
                    <td>
                        <?php echo $fasih['id'] ?>

                    </td>
                    <td>
                        <?php echo $fasih['name'] ?>

                    </td>
                    <td>
                        <?php echo $fasih['email'] ?>

                    </td> 
                    <td>
                        <?php echo $fasih['password'] ?>

                    </td>
                    <td>

                        <!-- <?php echo $fasih['file'] ?> -->
                        <img src="<?php echo $fasih['file'] ?>"  height="50px" width="50px">
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $fasih['id'] ?>">del</a>
                    </td>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $fasih['id'] ?>">edit</a>
                    </td>
                </tr>


            <?php } ?>

        </tbody>
    </table>



    <!-- <h1>show page</h1> -->
    <!-- <?php
    while ($fasih = $data->fetch_assoc()) {
        ?>


        <h1>
            <?php echo $fasih['name'] ?>
        </h1>
        <h1>
            <?php echo $fasih['email'] ?>
        </h1>
        <h1>
            <?php echo $fasih['password'] ?>
        </h1>


    <?php } ?> -->

    <!-- <?php
    while ($result = mysqli_fetch_assoc($data)) {
        ?>
                    <?php echo $result['name']; ?>
                    <?php echo $result['email']; ?>
                    <?php echo $result['password']; ?> 
        <?php
    }
    ?>       -->

</body>

</html>