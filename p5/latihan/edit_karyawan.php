<?php 
include "koneksi.php";

if (!isset($_GET['id'])) {
    echo "<script>alert('ID karyawan tidak ditemukan!'); window.location='data_karyawan.php';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan='$id'");
$data = mysqli_fetch_array($query);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='data_karyawan.php';</script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 5px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccd1d9;
            border-radius: 6px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 15px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-update {
            background-color: #28a745;
        }

        .btn-back {
            background-color: #007bff;
        }

        .btn:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>

<div class="container">

    <h2>✏ Edit Data Karyawan</h2>

    <form action="" method="POST">

        <label>ID Karyawan</label>
        <input type="text" name="id" value="<?= $data['id_karyawan']; ?>" readonly>

        <label>Nama Karyawan</label>
        <input type="text" name="nama" value="<?= $data['nama_karyawan']; ?>" required>

        <label>Jabatan</label>
        <input type="text" name="jabatan" value="<?= $data['jabatan']; ?>" required>

        <label>No Telepon</label>
        <input type="text" name="telp" value="<?= $data['no_telp']; ?>" required>

        <button type="submit" name="update" class="btn btn-update">💾 Simpan Perubahan</button>
        <a href="data_karyawan.php" class="btn btn-back">⬅ Kembali</a>

    </form>

</div>

</body>
</html>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $telp = $_POST['telp'];

    $update_query = mysqli_query($koneksi, 
        "UPDATE karyawan SET 
            nama_karyawan='$nama', 
            jabatan='$jabatan', 
            no_telp='$telp' 
        WHERE id_karyawan='$id'"
    );

    if ($update_query) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='data_karyawan.php';</script>";
    } else {
        echo "<script>alert('Gagal update data!');</script>";
    }
}
?>
