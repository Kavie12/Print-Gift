<?php

session_start();

if (isset($_SESSION['user'])) {

    $id = $_SESSION['user'];

    include './dbconn.php';

    $sql = "SELECT COUNT(*) as count FROM cart WHERE uid = $id";

    $result = mysqli_query($conn, $sql);

    echo mysqli_fetch_assoc($result)['count'];


}


?>