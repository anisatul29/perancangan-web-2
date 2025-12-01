<?php
include "koneksi.php"; // Tidak ditampilkan hasilnya
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laundry Online</title>

<style>
    body{
        font-family: Arial, sans-serif;
        background-color: #eef2f3;
        margin:0;
        padding:0;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    .container{
        width: 350px;
        background:white;
        padding:30px;
        border-radius:12px;
        text-align:center;
        box-shadow:0px 6px 15px rgba(0,0,0,0.1);
    }

    h2{
        color:#003366;
        margin-bottom:25px;
    }

    a.menu-btn{
        display:block;
        background-color:#1e90ff;
        color:white;
        padding:12px;
        margin:8px 0;
        border-radius:8px;
        text-decoration:none;
        font-size:16px;
        transition:0.3s;
    }

    a.menu-btn:hover{
        background:#0c6ac0;
    }
</style>

</head>
<body>

<div class="container">
    <h2>📌 Sistem Laundry Online</h2>

    <a href="admin_laundry.php" class="menu-btn">👤 Data Admin Laundry</a>
    <a href="data_karyawan.php" class="menu-btn">🧑‍🔧 Data Karyawan</a>
    <a href="data_pelanggan.php" class="menu-btn">💰 Data Pelanggan</a>
    <a href="layanan.php" class="menu-btn">🧺 Layanan Laundry</a>
    <a href="data_pesanan.php" class="menu-btn">📦 Data Pesanan</a>
    <a href="detail_pesanan.php" class="menu-btn">📄 Detail Pesanan</a>
    <a href="pembayaran.php" class="menu-btn">💵 Pembayaran</a>
    <a href="pengantaran.php" class="menu-btn">🚚 Pengantaran</a>
    <a href="laporan.php" class="menu-btn">📊 Laporan</a>
</div>

</body>
</html>
