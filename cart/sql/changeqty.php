<?php

    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';

        $qty = $_POST['qty'];
        $pid = $_POST['pid'];

        $sql = "UPDATE cart SET qty = $qty WHERE uid = $uid AND pid = $pid";

        mysqli_query($conn, $sql);

    }


?>