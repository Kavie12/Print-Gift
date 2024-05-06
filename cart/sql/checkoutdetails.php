<?php

    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';

        $sql = "SELECT
                    items.title as title,
                    cart.qty as qty,
                    items.price as price,
                    cart.wrap as wrap
                FROM cart
                INNER JOIN items ON cart.pid = items.id
                WHERE cart.uid = $uid";
        
        $result = mysqli_query($conn, $sql);

        echo json_encode(mysqli_fetch_all($result));

    }


?>