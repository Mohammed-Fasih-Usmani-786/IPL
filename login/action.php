<?php 

$connection = mysqli_connect("localhost","root","","ipl") or die("not connected");

if(isset($_POST['reg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $logo=$_POST['logo'];
    // $name=$_POST['name'];
    // echo $user;

    $query="select * from owners where email='$email'";
    $data = mysqli_query($connection, $query) or die("query not fire");

    $i=0;
    // while ($fasih = $data->fetch_assoc())
    while ($fasih = $data->fetch_assoc())
    {
        $i++;
    }

    // echo $data
    if($i>0)
    {
        echo "alreay registor Email";
    }
    else
    {
        if(!$name)
        {
            header("location:error.php");
            // echo "please fill all feild "; 
        }
        else
        {
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
            $file=explode(".",$_FILES['file']['name']);
            $filename="../image/logo/".uniqid().".".$file[1];
            $img_upl=move_uploaded_file($_FILES['file']['tmp_name'],$filename);
           
            $row_id=_crd();
            $qry= "insert into owners set name='$name',row_id='$row_id',email='$email',password='$password',logo='$filename'";
    
            mysqli_query($connection,$qry) or die("query not fire");
           
            header("location:login.php");
        }
    }

}

