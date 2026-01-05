<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM admin WHERE id_admin='$id'";

if(!mysqli_query($koneksi,$query)){
    die("Error hapus admin: ".mysqli_error($koneksi));
}

header("location:admin.php");
