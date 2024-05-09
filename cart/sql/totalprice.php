<?php

    session_start();

    if (isset($_SESSION['user'])) {

        $uid = $_SESSION['user'];

        include '../../library/sql/dbconn.php';

        // QTY and its Price
        $sql = "SELECT
                    cart.qty as qty,
                    items.price as price
                FROM cart
                INNER JOIN items ON cart.pid = items.id
                WHERE cart.uid = $uid";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result);


        // Delivery and wrapping prices
        $sql2 = "SELECT delivery, wrap FROM service_prices WHERE id = 1";
        $result2 = mysqli_query($conn, $sql2);
        $data2 = mysqli_fetch_all($result2)[0];
   

        // Wrapping product count
        $sql3 = "SELECT COUNT(*) FROM cart WHERE uid = $uid AND wrap = 1";
        $result3 = mysqli_query($conn, $sql3);
        $data3 = mysqli_fetch_all($result3)[0][0];


        // delivery + wrapping price * wrapping count
        $total = $data2[0] + $data2[1] * $data3;

        // QTY * Price
        foreach($data as $x) {
            $total += $x[0] * $x[1];
        }

        echo $total;

        

    }


?>