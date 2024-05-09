<?php
    session_start();

    if (isset($_SESSION['admin']) && isset($_POST['edit'])) {

        $id = $_GET['id'];
        $question = $_POST['edit-faq-q'];
        $answer = $_POST['edit-faq-a'];

        include '../../../library/sql/dbconn.php';

        $sql = "UPDATE faq SET question = '$question', answer = '$answer' WHERE id = '$id'";

        mysqli_query($conn, $sql);

        header("Location: ../");

    }

?>