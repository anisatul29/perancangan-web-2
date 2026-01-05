<?php
include "../template/header.php";
include "../config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin='$id'");
$a = mysqli_fetch_array($data);
?>

<div class="container mt-4">
<h4>Edit Admin</h4>

<form action="update_admin.php" method="POST">
    <input type="hidden" name="id_admin" value="<?= $a['id_admin']; ?>">

    <div class="mb-3">
        <label>Nama Admin</label>
        <input type="text" name="nama_admin" 
               value="<?= $a['nama_admin']; ?>" 
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" 
               value="<?= $a['username']; ?>" 
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Password (kosongkan jika tidak diubah)</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="admin.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php include "../template/footer.php"; ?>
