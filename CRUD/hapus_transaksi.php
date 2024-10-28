<?php
include 'koneksi.php';

// Cek apakah ID transaksi diset
if (isset($_GET['id'])) {
    $id_transaksi = intval($_GET['id']); // Mengambil ID transaksi dari URL

    // Query untuk menghapus transaksi
    $sql = "DELETE FROM transaksi WHERE id_transaksi = ?";
    $params = array($id_transaksi);
    $stmt = sqlsrv_query($conn, $sql, $params);

    // Cek apakah query berhasil
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Transaksi berhasil dihapus!";
    }

    // Tutup koneksi
    sqlsrv_close($conn);

    // Redirect kembali ke halaman utama (index.php atau index.html)
    header("Location: index.php");
    exit(); // Hentikan script setelah redirect
} else {
    echo "ID transaksi tidak ditentukan.";
}
?>
