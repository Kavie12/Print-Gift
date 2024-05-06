<?php

    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';

        $pid = $_POST['pid'];

        $sql = "DELETE FROM cart WHERE uid = $uid AND pid = $pid";

        mysqli_query($conn, $sql);

    }


?>