<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';
    $sql = "SELECT username FROM admin WHERE id = 1";
    
    $result = mysqli_query($conn, $sql);

    echo mysqli_fetch_assoc($result)['username'];
}




?>