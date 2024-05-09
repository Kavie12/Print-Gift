<?php
    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';
        date_default_timezone_set("Asia/Colombo");

        $sql1 = "SELECT pid, text, color, img, wrap, comments, qty FROM cart WHERE uid = '$uid'";
        
        $result1 = mysqli_query($conn, $sql1);
        
        if (mysqli_num_rows($result1) > 0) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $pid = $row['pid'];
                $text = $row['text'];
                $color = $row['color'];
                $img = $row['img'];
                $wrap = $row['wrap'];
                $comments = $row['comments'];
                $qty = $row['qty'];
                $add_date = date("Y-m-d H:i:s");
                $status = 'pending';

                $sql2 = "INSERT INTO orders (uid, pid, text, color, img, wrap, comments, qty, add_date, status)
                                    VALUES ('$uid', '$pid', '$text', '$color', '$img', '$wrap', '$comments', '$qty','$add_date', '$status')";

                mysqli_query($conn, $sql2);
            }
        }

        $sql3 = "DELETE FROM cart WHERE uid = '$uid'";
        mysqli_query($conn, $sql3);

        header("Location: ../../account/recentorders.php");


    }


?>