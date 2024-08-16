<?php
$connection = mysqli_connect("localhost", "root", "", "ipl") or die("not connected");
if (isset($_GET['player_id'])) {
    $player_id = $_GET['player_id'];


    $qry = "TRUNCATE TABLE add_auction ";
    mysqli_query($connection, $qry) or die("not fire");

    $qry = "select * from add_auction ";
    mysqli_query($connection, $qry) or die("not fire");


    if (mysqli_affected_rows($connection)) {
        header("location:auction.php?m='Already Add Player To Start Auction'");
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

        $row_id = _crd();
        $qry = "insert into add_auction set row_id='$row_id',player_id='$player_id'";

        // $query = "delete from add_player where id=$id";

        mysqli_query($connection, $qry) or die("query not fire");

        header("location:auction.php?m='Successfully Add Player'");
    }
}
