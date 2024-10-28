<?php
include 'koneksi.php';

// Query untuk mengambil data transaksi
$sql_transaksi = "SELECT t.id_transaksi, t.tgl, t.jenis_transaksi, t.keterangan, t.nominal, k.nama_kategori 
                  FROM transaksi t 
                  JOIN kategori k ON t.id_kategori = k.id_kategori";
$result_transaksi = sqlsrv_query($conn, $sql_transaksi);

// Memastikan ada data yang diambil
if ($result_transaksi === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Loop untuk menampilkan data transaksi
$counter = 1; // Inisialisasi counter
while($row = sqlsrv_fetch_array($result_transaksi, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>{$counter}</td>"; // Menampilkan ID berurutan
    echo "<td>" . $row['tgl']->format('Y-m-d') . "</td>";
    echo "<td>{$row['jenis_transaksi']}</td>";
    echo "<td>{$row['keterangan']}</td>";
    echo "<td>" . number_format($row['nominal'], 0, ',', '.') . " IDR</td>";
    echo "<td>{$row['nama_kategori']}</td>";
    echo "<td>
            <a href='hapus_transaksi.php?id={$row['id_transaksi']}' onclick=\"return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');\">Hapus</a>
          </td>";
    echo "</tr>";
    $counter++; 
}


// Tutup koneksi
sqlsrv_close($conn);
?>
