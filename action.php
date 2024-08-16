<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");

if (isset($_POST['reg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $logo = $_POST['file'];
    $budget = $_POST['budget'];
    // echo $user;

    $query = "select * from owners where email='$email'";
    $data = mysqli_query($connection, $query) or die("query not fire");

    $i = 0;
    // while ($fasih = $data->fetch_assoc())
    while ($fasih = $data->fetch_assoc()) {
        $i++;
    }

    // echo $data
    if ($i > 0) {
        // echo "alreay registor Email";
        header("location:registration.php?m=1");
    } else {
        if (!$name) {
            header("location:error.php");
            // echo "please fill all feild "; 
        } else {
            function _crd()
            {
                $str = "";
                $length = 10;
                $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
                $max = count($characters) - 1;
                for ($i = 0; $i < $length; $i++) {
                    $rand = mt_rand(0, $max);
                    $str .= $characters[$rand];
                }
                $date = date("Ym");
                $t = time();
                $r = $date . $str . $t;
                return $r;
            }

            // echo strlen($name);
            // echo strlen($email);echo strlen($password);
            $file = explode(".", $_FILES['file']['name']);
            $filename = "image/logo/" . uniqid() . "." . $file[1];
            $img_upl = move_uploaded_file($_FILES['file']['tmp_name'], $filename);

            $row_id = _crd();
            $qry = "insert into owners set name='$name',row_id='$row_id',email='$email',password='$password',logo='$filename',budget='$budget'";

            mysqli_query($connection, $qry) or die("query not fire");

            header("location:login.php?m='Success Fully Create Account Please Login'");
        }
    }
}


if (isset($_POST['bid'])) {


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

    $v = 0;
    $add_play_id = 0;
    foreach ($data as $d) {
        // print_r($auction['player_id']);
        $v = $d['amt'];
        $add_play_id = $d['row_id'];
        $id = $d['id'];
    }

    $ow_id = $_SESSION['rid'];





    $value = $_POST['value'];
    $arr = [];




    // $i = 0;
    // while ($fasih = $data->fetch_assoc())
    // while ($fasih = $data->fetch_assoc()) {
    //     $i++;
    // }

    // echo $data
    if ($value < $v) {
        // echo "alreay registor Email";
        header("location:auction-start.php?m='Please Enter Value Above'");
    } else {

        // $qry = "update add_player set amt='$value' where row_id=$pid";
        // mysqli_query($connection, $qry) or die("not fire");
        $qry = "update add_player set amt='$value' where id=$id";
        mysqli_query($connection, $qry) or die("not fire");



        function _crd()
        {
            $str = "";
            $length = 10;
            $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
            $max = count($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
            $date = date("Ym");
            $t = time();
            $r = $date . $str . $t;
            return $r;
        }

        $query = "select * from bid where p_id='$pid'";
        $data = mysqli_query($connection, $query) or die("query not Entry");

        $c=0;
        foreach ($data as $d) {
            // print_r($auction['player_id']);
            $c++;
            // $add_play_id = $d['row_id'];
            // $id = $d['id'];
        }

        if ($c > 0) {
            $qry = "update bid set amt='$value',ow_id='$ow_id' where p_id='$pid'";
            mysqli_query($connection, $qry) or die("query not Entry");
            header("location:auction-start.php?m='New Amount Entry Update'");
        } else {
            $row_id = _crd();
            $qry = "insert into bid set row_id='$row_id',ow_id='$ow_id',p_id='$pid',amt='$value'";
            mysqli_query($connection, $qry) or die("query not fire");

            header("location:auction-start.php?m='New Amount Entry'");
        }
    }
}
