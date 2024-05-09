<?php
    session_start();
    if (isset($_SESSION['admin'])) {

        include '../../../library/sql/dbconn.php';

        date_default_timezone_set("Asia/Colombo");
        $prevMonth = date('Y-m-d H:i:s', strtotime('-1 month'));

        $sql1 = "SELECT COUNT(*) FROM users WHERE status = 'active' AND reg_date > '$prevMonth'";
        $result1 = mysqli_query($conn, $sql1);
        $usercount = intval(mysqli_fetch_all($result1)[0][0]);


        $sql2 = "SELECT COUNT(*) FROM orders WHERE status != 'declined' OR status != 'pending' AND add_date > '$prevMonth'";
        $result2 = mysqli_query($conn, $sql2);
        $ordercount = intval(mysqli_fetch_all($result2)[0][0]);

        $sql3 = "SELECT
                    orders.qty as qty,
                    items.price as price 
                FROM orders
                INNER JOIN items ON orders.pid = items.id
                WHERE orders.status != 'declined' OR orders.status != 'pending' AND order.add_date > '$prevMonth'";
        $result3 = mysqli_query($conn, $sql3);
        $total = 0;
        if (mysqli_num_rows($result3) > 0) {
            while ($row = mysqli_fetch_assoc($result3)) {
                $total += $row['price'] * $row['qty'];
            }
        }
        
        echo json_encode(array($usercount, $ordercount, $total));
    }
?>