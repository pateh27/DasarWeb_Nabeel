<?php
echo"Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, 
maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”<BR>";

$poinPemain = 5000;
echo"<BR>Total Skor Pemain Adalah <b>$poinPemain<b> poin<BR>";
echo"Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)<BR>";
if ($poinPemain > 500) {
    $poinSetelahBonus = $poinPemain + 1000;
    echo"Ya, anda mendapatkan hadiah tambahan.<br>Selamat anda mendapatkan hadiah tambahan berupa 1000 point 
    Sehingga poin ada menjadi $poinSetelahBonus dan TV";
} else {
    echo"Tidak, anda tidak mendapatkan hadiah tambahan.";
    }

?>