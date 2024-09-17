<?php
echo"Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
Bantu guru ini menghitung total nilai 
yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";

$daftarNilai = [85,92,78,64,90,75,88,79,70,96];

//Mencari 2 nilai max
$max1 = $daftarNilai[0];
$max2 = $daftarNilai[0];
for ($i = 1; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] > $max1) {
        $max2 = $max1; 
        $max1 = $daftarNilai[$i]; 
    } elseif ($daftarNilai[$i] > $max2 && $daftarNilai[$i] != $max1) {
        $max2 = $daftarNilai[$i]; 
    }
}
echo"<br>Nilai Max 1 dan 2 adalah " . $max1 . " & ". $max2. '';

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] == $max1 || $daftarNilai[$i] == $max2) {
        // Menggeser elemen ke kiri untuk menghapus nilai
        for ($j = $i; $j < count($daftarNilai) - 1; $j++) {
            $daftarNilai[$j] = $daftarNilai[$j + 1];
        }
        array_pop($daftarNilai); 
        $i--; 
    }
}

//Mencari 2 nilai min
$min1 = $daftarNilai[0];
$min2 = $daftarNilai[0];
for ($i = 1; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] < $min1) {
        $min2 = $min1; 
        $min1 = $daftarNilai[$i]; 
    } elseif ($daftarNilai[$i] < $min2 && $daftarNilai[$i] != $min1) {
        $min2 = $daftarNilai[$i];
    }
}

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($daftarNilai[$i] == $min1 || $daftarNilai[$i] == $min2) {
        // Menggeser elemen ke kiri untuk menghapus nilai
        for ($j = $i; $j < count($daftarNilai) - 1; $j++) {
            $daftarNilai[$j] = $daftarNilai[$j + 1];
        }
        array_pop($daftarNilai); 
        $i--;
    }
}

echo"<br>Nilai Min 1 dan 2 adalah " . $min1 . " & ". $min2. '';

$total = 0;
for ($i = 0; $i < count($daftarNilai); $i++) {
        $total += $daftarNilai[$i];
}
$rerata = $total / (count($daftarNilai));
echo"<b><BR>Total Nilai Matematika adalah ". $total ." dan mendapatkan rerata ". $rerata ."<b>";
?>