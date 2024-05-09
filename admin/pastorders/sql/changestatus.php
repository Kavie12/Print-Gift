<?php

    session_start();

    if (isset($_SESSION['admin'])) {

        include '../../../library/sql/dbconn.php';

        $id = $_GET['id'];
        $status = $_GET['status'];


        $sql = "UPDATE `orders` SET status = '$status' WHERE id = '$id'";

        mysqli_query($conn, $sql);


    }
?>