<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$query_sql = "INSERT INTO tbl_user (fullname, username, email, password)
            VALUES ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftar gagal : " . mysqli_error($conn);
}
