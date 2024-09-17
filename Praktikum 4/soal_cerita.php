<?php
echo " Soal Cerita <BR> 
Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
Berapa persen kursi yang masih kosong di restoran tersebut?";
$kursiPakai = 28;
$kursiTotal = 45;
$persentase = ($kursiTotal - $kursiPakai) / $kursiTotal * 100;
echo "<BR><b>Persentase Total kursi kosong = <b>" . number_format($persentase,2) ."%";
?>