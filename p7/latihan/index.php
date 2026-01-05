<?php
session_start();
include "../config/koneksi.php";
include "../template/header.php";

// Ambil data admin
$data_admin = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY id_admin DESC");
?>



<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold text-primary">Manajemen Admin</h4>
        <a href="tambah_admin.php" class="btn btn-primary">
            + Tambah Admin
        </a>
    </div>

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                if(mysqli_num_rows($data_admin) > 0){
                    while($a = mysqli_fetch_assoc($data_admin)){
                ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= htmlspecialchars($a['nama_admin']); ?></td>
                        <td><?= htmlspecialchars($a['username']); ?></td>
                        <td class="text-center">
                            <a href="edit_admin.php?id=<?= $a['id_admin']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <a href="hapus_admin.php?id=<?= $a['id_admin']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus admin ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">
                            Data admin belum tersedia
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php include "../template/footer.php"; ?>
