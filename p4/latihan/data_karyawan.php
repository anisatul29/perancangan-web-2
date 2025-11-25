<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM karyawan");

echo "<h2>Data Karyawan Laundry Online</h2>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>ID</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>No Telp</th>
        </tr>";

while ($data = mysqli_fetch_array($query)) {
    echo "<tr>
            <td>".$data['id_karyawan']."</td>
            <td>".$data['nama_karyawan']."</td>
            <td>".$data['jabatan']."</td>
            <td>".$data['no_telp']."</td>
          </tr>";
}

echo "</table>";
?>
