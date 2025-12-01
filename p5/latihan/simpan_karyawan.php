<?php
include "koneksi.php";

// Jika halaman ini diakses tanpa submit
if (!isset($_POST['update'])) {
    echo "<script>alert('Akses ditolak!'); window.location='data_karyawan.php';</script>";
    exit;
}

// Ambil data dari form
$id      = $_POST['id'];
$nama    = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$telp    = $_POST['telp'];

// Query update
$update = mysqli_query($koneksi, 
    "UPDATE karyawan SET 
        nama_karyawan='$nama',
        jabatan='$jabatan',
        no_telp='$telp'
    WHERE id_karyawan='$id'"
);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Perubahan</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #eef2f3;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin: 80px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0px 5px 12px rgba(0,0,0,0.1);
    }

    h2 {
        color: #003366;
    }

    .alert-success {
        background-color: #d4edda;
        padding: 12px;
        border-radius: 6px;
        color: #155724;
        margin-bottom: 20px;
    }

    .alert-error {
        background-color: #f8d7da;
        padding: 12px;
        border-radius: 6px;
        color: #721c24;
        margin-bottom: 20px;
    }

    .btn {
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 6px;
        color: white;
        font-size: 15px;
    }

    .btn-home { background-color: #007bff; }
    .btn-view { background-color: #28a745; }
</style>

</head>
<body>

<div class="container">

    <h2>💾 Simpan Perubahan Data</h2>

    <?php if ($update) { ?>
        <div class="alert-success">
            ✔️ Data berhasil diperbarui!
        </div>
    <?php } else { ?>
        <div class="alert-error">
            ❌ Gagal menyimpan perubahan!
        </div>
    <?php } ?>

    <a href="data_karyawan.php" class="btn btn-view">📄 Lihat Data</a>
    <a href="karyawan.php" class="btn btn-home">🏠 Kembali ke Menu</a>

</div>

</body>
</html>
