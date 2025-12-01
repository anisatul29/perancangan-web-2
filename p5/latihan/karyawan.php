<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Karyawan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .menu {
            margin-top: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-tambah { background: #28a745; } /* hijau */
        .btn-lihat { background: #007bff; }  /* biru */
        .btn-edit { background: #17a2b8; }   /* biru muda */
        .btn-hapus { background: #dc3545; }  /* merah */
        .btn-simpan { background: #6f42c1; } /* ungu */
    </style>
</head>
<body>

<div class="container">
    <h2>MENU DATA KARYAWAN</h2>

    <div class="menu">
        <a href="tambah_karyawan.php" class="btn btn-tambah">➕ Form Input Karyawan</a>
        <a href="data_karyawan.php" class="btn btn-lihat">📄 Lihat Data Karyawan</a>
        <a href="edit_karyawan.php" class="btn btn-edit">✏️ Edit Karyawan</a>
        <a href="hapus_karyawan.php" class="btn btn-hapus">🗑️ Hapus Karyawan</a>
        <a href="simpan_karyawan.php" class="btn btn-simpan">💾 Simpan Perubahan</a>
    </div>
</div>

</body>
</html>
