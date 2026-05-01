<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'todolist_db';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi Database gagal: " . mysqli_connect_error());
    }
?>
