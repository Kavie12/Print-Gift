<?php

    session_start();

    include '../../library/sql/dbconn.php';

    $user_id = $_SESSION['user'];

    date_default_timezone_set("Asia/Colombo");
    $updatedate = date("Y-m-d H:i:s");

    $sql = "UPDATE `users` SET updatedate='$updatedate', status='deleted' WHERE id='$user_id'";
    mysqli_query($conn, $sql);

    session_destroy();

    header("Location: ../../");

?>