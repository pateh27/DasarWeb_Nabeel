<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_kategori = $_POST['nama_kategori'];
    
    $sql = "INSERT INTO kategori (nama_kategori) VALUES (?)";
    $params = array($nama_kategori);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        // Jika berhasil, redirect ke index.html
        header("Location: index.html"); // Pastikan index.html ada di direktori yang sama
        exit(); // Hentikan script setelah redirect
    }

    sqlsrv_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kategori</title>
</head>
<body>
<h2>Tambah Kategori Baru</h2>
<form action="olah_kategori.php" method="post">
    <label>Nama Kategori: <input type="text" name="nama_kategori" required></label><br>
    <input type="submit" value="Tambah Kategori">
</form>
</body>
</html>
