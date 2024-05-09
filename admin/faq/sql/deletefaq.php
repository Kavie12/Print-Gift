<?php
    session_start();

    if (isset($_SESSION['admin'])) {

        $id = $_GET['id'];

        include '../../../library/sql/dbconn.php';

        $sql = "DELETE FROM faq WHERE id = '$id'";

        mysqli_query($conn, $sql);

    }

?>