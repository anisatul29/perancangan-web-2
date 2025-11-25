<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "laundry_online";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi) {
    echo "Koneksi BERHASIL!";
} else {
    echo "Koneksi GAGAL! : " . mysqli_connect_error();
}
?>
