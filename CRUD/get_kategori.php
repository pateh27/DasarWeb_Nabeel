<?php
include 'koneksi.php';

$sql_kategori = "SELECT * FROM kategori";
$result_kategori = sqlsrv_query($conn, $sql_kategori);

while($row = sqlsrv_fetch_array($result_kategori, SQLSRV_FETCH_ASSOC)) {
    echo "<option value='{$row['id_kategori']}'>{$row['nama_kategori']}</option>";
}

sqlsrv_close($conn);
?>
