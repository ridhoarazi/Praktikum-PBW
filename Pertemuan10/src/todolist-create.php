<?php
    require "../config/koneksi.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = 1;
        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];
        $deadline = $_POST['deadline'];

        $query = "INSERT INTO todolists (user_id, title, description, priority, deadline) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'issss', $user_id, $title, $description, $priority, $deadline);

        if(mysqli_stmt_execute($stmt)) {
            header("Location: ../index.php");
            exit();
        } else {
            die("Error: " . mysqli_error($conn));
        }
        

    };
?>