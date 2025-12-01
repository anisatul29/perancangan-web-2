<?php
$koneksi = mysqli_connect("localhost", "root", "", "laundry_online");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
