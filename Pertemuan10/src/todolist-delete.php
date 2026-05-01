<?php
    require "../config/koneksi.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $user_id = 1;

        $query = "DELETE FROM todolists WHERE id=? AND user_id=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ii', $id, $user_id);

        if(mysqli_stmt_execute($stmt)) {
            header("Location: ../completed.php?success=deleted");
            exit();
        } else {
            die("Error: " . mysqli_error($conn));
        }
    } else {
        die("Error: " . mysqli_error($conn));

    };
?>