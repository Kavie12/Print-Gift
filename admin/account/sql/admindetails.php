<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';
    $sql = "SELECT username FROM admin WHERE id = 1";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uname = $row['username'];
        }
    }

    echo $uname;
}




?>