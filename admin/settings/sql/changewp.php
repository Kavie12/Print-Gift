<?php

session_start();

if (isset($_SESSION['admin'])) {

    include '../../../library/sql/dbconn.php';

    $wrap = mysqli_real_escape_string($conn, $_POST['wrap']);

    $sql = "UPDATE service_prices SET wrap = '$wrap' WHERE id = 1";

    mysqli_query($conn, $sql);

    header("Location: ../wrap.php");

}


?>