<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");
session_start();
// if(isset($_POST['reg'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $logo=$_POST['file'];


//     $query="select * from owners where email='$email'";
//     $data = mysqli_query($connection, $query) or die("query not fire");

//     $i=0;

//     while ($fasih = $data->fetch_assoc())
//     {
//         $i++;
//     }


//     if($i>0)
//     {

//         header("location:registration.php?m=1");
//     }
//     else
//     {
//         if(!$name)
//         {
//             header("location:error.php");

//         }
//         else
//         {
//             function _crd()
//             {
//                 $str = "";
//                 $length = 10;
//                 $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
//                 $max = count($characters) - 1;
//                 for ($i = 0; $i < $length; $i++) {
//                     $rand = mt_rand(0, $max);
//                     $str .= $characters[$rand];
//                 }
//                 $date = date("Ym");
//                 $t = time(); 
//                 $r = $date . $str . $t;
//                 return $r;
//             }


//             $file=explode(".",$_FILES['file']['name']);
//             $filename="image/logo/".uniqid().".".$file[1];
//             $img_upl=move_uploaded_file($_FILES['file']['tmp_name'],$filename);

//             $row_id=_crd();
//             $qry= "insert into owners set name='$name',row_id='$row_id',email='$email',password='$password',logo='$filename'";

//             mysqli_query($connection,$qry) or die("query not fire");

//             header("location:login.php");
//         }
//     }

// }


// if (isset($_GET['logout']) == 1) {
//     session_destroy(); 
//     header("location:../login.php");
// }


if (isset($_POST['login'])) {
    session_start();
    $m = 1; 
    $email = $_POST["lmail"];
    $pass = $_POST["lpass"];

    $_SESSION['user'] = $email;

    $_SESSION['status'] = true;



    $qry = "select * from owners where email='$email' and pass='$pass'";
    mysqli_query($connection, $qry) or die("not fire");


    if (mysqli_affected_rows($connection)) {
        header("location:index.php");
    } else {

        header("location:admin-login.php?m='Not Valid Email Or Password'");
    }
}


// add player -----------------------------------------------=====================================================================================
if (isset($_POST['addplayer'])) {
    $name = $_POST['name'];
    $amt = $_POST['amt'];
    // $t_player = $_POST['t_player'];
    $p_img = $_POST['p_img'];
    $t_code = $_POST['t_code'];
    // echo $user;

    $query = "select * from add_player where name='$name'";
    $data = mysqli_query($connection, $query) or die("query not fire");

    $i = 0;
    // while ($fasih = $data->fetch_assoc())
    while ($fasih = $data->fetch_assoc()) {
        $i++;
    }

    // echo $data
    if ($i > 0) {
        // echo "alreay registor Email";
        header("location:add-player.php?m=You Already Add This Player");
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
            $cn = "";
            $query = "select * from player_country where row_id='$t_code'";
            $data = mysqli_query($connection, $query) or die("query not fire");
            while ($fasih = $data->fetch_assoc()) {
                $cn = $fasih['country_name'];
            }


            // echo strlen($name);
            // echo strlen($email);echo strlen($password);
            $file = explode(".", $_FILES['p_img']['name']);
            $filename = "../image/add_player/" . uniqid() . "." . $file[1];
            $img_upl = move_uploaded_file($_FILES['p_img']['tmp_name'], $filename);

            $row_id = _crd();
            $qry = "insert into add_player set name='$name',row_id='$row_id',amt='$amt',p_img='$filename',t_code='$t_code',t_player='$cn'";

            mysqli_query($connection, $qry) or die("query not fire");

            header("location:add-player.php?m=You Sucessfully Add This Player");
        }
    }
}


if (isset($_POST['xregister'])) //update data
{
    $id = $_POST["xid"];
    $name = $_POST["xname"];
    $amt = $_POST["xamt"];
    // $contect=$_POST["contect"];

    $p_img = $_FILES["xp_img"];



    $file1 = explode(".", $_FILES['xp_img']['name']);
    $filename = "../image/add_player/" . uniqid() . "." . $file1[1];
    $img_upl = move_uploaded_file($_FILES['xp_img']['tmp_name'], $filename);

    $qry = "update add_player set name='$name',amt='$amt',p_img='$filename' where id=$id";
    mysqli_query($connection, $qry) or die("not fire");
    header("location:show.php?m='Successfully Update'");
}


if(isset ($_GET['logout'])==1)
{
    session_destroy();
    header("location:../login.php");
}