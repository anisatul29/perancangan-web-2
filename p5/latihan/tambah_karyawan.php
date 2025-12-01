<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $telp = $_POST['telp'];

    $query = "INSERT INTO karyawan (id, nama, jabatan, telp) VALUES ('$id', '$nama', '$jabatan', '$telp')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>alert('Data karyawan berhasil ditambahkan'); window.location='lihat_karyawan.php';</script>";
    }else{
        echo "<script>alert('Gagal menambahkan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f5e9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 350px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            border-top: 5px solid #43a047;
        }

        h2 {
            text-align: center;
            color: #2e7d32;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #2e7d32;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 2px solid #c8e6c9;
            border-radius: 6px;
            margin-bottom: 15px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #66bb6a;
            box-shadow: 0px 0px 5px rgba(76,175,80,0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #43a047;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: 0.3s;
        }

        button:hover {
            background: #2e7d32;
        }

        .back-btn {
            margin-top: 10px;
            text-align: center;
        }

        .back-btn a {
            text-decoration: none;
            color: #1b5e20;
            font-weight: bold;
        }

        .back-btn a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Tambah Karyawan</h2>

    <form method="POST">
        <label>ID Karyawan</label>
        <input type="text" name="id" required>

        <label>Nama Karyawan</label>
        <input type="text" name="nama" required>

        <label>Jabatan</label>
        <select name="jabatan" required>
            <option value="">-- Pilih Jabatan --</option>
            <option value="Admin">Admin</option>
            <option value="Karyawan">Karyawan</option>
        </select>

        <label>No Telepon</label>
        <input type="text" name="telp" required>

        <button type="submit" name="submit">Simpan</button>
    </form>

    <div class="back-btn">
        <a href="dashboard_admin.php">← Kembali</a>
    </div>
</div>

</body>
</html>
