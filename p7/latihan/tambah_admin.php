<?php
include "../template/header.php";
?>

<div class="container mt-4">
    <h4 class="mb-3">Tambah Admin</h4>

    <form action="simpan_admin.php" method="POST">

        <div class="mb-3">
            <label>Nama Admin</label>
            <input type="text" name="nama_admin" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="admin.php" class="btn btn-secondary">Kembali</a>

    </form>
</div>

<?php include "../template/footer.php"; ?>
