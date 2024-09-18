<?php
echo"Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon";

$hargaBarang = 120000;
$hargaSetelahDiskon = 0;
if ($hargaBarang > 100000) {
    $diskon = 0.2;
    $hargaSetelahDiskon = $hargaBarang - ($hargaBarang * $diskon) ;
}

echo "<br><b>Harga barang setelah diskon adalah $hargaSetelahDiskon <b>";
?>