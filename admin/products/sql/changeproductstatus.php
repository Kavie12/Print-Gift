<?php

    include '../../../library/sql/dbconn.php';

    date_default_timezone_set("Asia/Colombo");

    $id = $_POST['id'];
    $updatedate = date("Y-m-d H:i:s");
    $status = $_POST['status'];

    $sql = "UPDATE `items` SET updated_date = '$updatedate', status = '$status' WHERE id = $id";

    mysqli_query($conn, $sql);


?>