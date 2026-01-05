<?php
include "../template/header.php";
include "../config/koneksi.php";

/* =============================
   SETTING PAGINATION
============================= */
$batas = 5; // jumlah data per halaman
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman - 1) * $batas;

/* =============================
   AMBIL DATA PELANGGAN
============================= */
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM pelanggan 
     ORDER BY id_pelanggan DESC 
     LIMIT $halaman_awal, $batas"
);

/* =============================
   HITUNG TOTAL DATA
============================= */
$total_data = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM pelanggan")
);

$total_halaman = ceil($total_data / $batas);
?>

<h3>Data Pelanggan</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($p = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $p['nama_pelanggan']; ?></td>
            <td><?= $p['no_hp']; ?></td>
            <td><?= $p['alamat']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<!-- =============================
     PAGINATION
============================= -->
<nav>
    <ul class="pagination">
        <?php for ($x = 1; $x <= $total_halaman; $x++) { ?>
            <li class="page-item <?= ($x == $halaman) ? 'active' : ''; ?>">
                <a class="page-link" href="?halaman=<?= $x; ?>">
                    <?= $x; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>

<?php include "../template/footer.php"; ?>
