<?php
include 'koneksi.php';

$tanggal = $_POST['tanggal'];
$keterangan = $_POST['ket'];
$debit = $_POST['debit'];
$kredit = $_POST['kredit'];
$kategori_id = $_POST['kategori_id'];
$jenis_transaksi = $_POST['jenis_transaksi'];

$nominal = $debit ?: $kredit;
$jenis_transaksi = $debit ? 'Debit' : 'Kredit';

$sql = "INSERT INTO transaksi (tgl, jenis_transaksi, keterangan, nominal, id_kategori) VALUES (?, ?, ?, ?, ?)";
$params = array($tanggal, $jenis_transaksi, $keterangan, $nominal, $kategori_id);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Transaksi berhasil disimpan!";
}

sqlsrv_close($conn);
?>
