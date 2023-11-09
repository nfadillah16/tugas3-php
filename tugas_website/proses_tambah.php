<?php
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $created_at = date('Y-m-d H:i:s');

    $result = mysqli_query($conn, "INSERT INTO customer (first_name, email, phone, address, created_at) VALUES ('$first_name', '$email', '$phone', '$address', '$created_at')");
    if (mysqli_query($conn, $query)) {
        echo '<div class="alert alert-success">Data customer berhasil ditambahkan.</div>';
    } else {
        echo '<div class="alert alert-danger">Gagal menambahkan data customer.</div>';
    }
}
header("Location:index.php");
?>