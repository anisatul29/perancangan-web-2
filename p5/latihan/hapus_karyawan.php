<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan='$id'");

echo "<script>alert('Data berhasil dihapus!'); window.location='karyawan.php';</script>";
?>
