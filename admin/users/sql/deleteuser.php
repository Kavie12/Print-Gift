<?php

    session_start();

    if (isset($_SESSION['admin'])) {
        include '../../../library/sql/dbconn.php';

        $id = $_POST['id'];
    
        date_default_timezone_set("Asia/Colombo");
        $updatedate = date("Y-m-d H:i:s");
    
        $sql = "UPDATE `users` SET updatedate='$updatedate', status='deleted' WHERE id='$id'";
        mysqli_query($conn, $sql);
    
    }

?>