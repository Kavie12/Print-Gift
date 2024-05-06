<?php

    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';

        $sql = "SELECT delivery, wrap FROM service_prices WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result)[0];
   

        $sql2 = "SELECT COUNT(*) FROM cart WHERE uid = $uid AND wrap = 1";
        $result2 = mysqli_query($conn, $sql2);
        $data2 = mysqli_fetch_all($result2)[0][0];

        array_push($data, $data2);

        // delivery, wrapping, wrapping count
        echo json_encode($data);

    }


?>