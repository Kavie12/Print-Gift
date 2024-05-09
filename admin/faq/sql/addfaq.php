<?php
    session_start();

    if (isset($_SESSION['admin']) && isset($_POST['add'])) {

        $question = $_POST['add-faq-q'];
        $answer = $_POST['add-faq-a'];

        include '../../../library/sql/dbconn.php';

        $sql = "INSERT INTO faq (question, answer) VALUES ('$question', '$answer')";

        mysqli_query($conn, $sql);

        header("Location: ../");

    }

?>