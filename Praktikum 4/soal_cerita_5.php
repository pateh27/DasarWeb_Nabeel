<?php
echo"Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
Guru tersebut memiliki data setiap siswa terdriri dari nama dan nilai. 
Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. 
Dengan ketentuan nama dan nilai siswa Alice 
dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90";

$nilaiMatematika = [
["Alice", 85],
["Bob", 92],
["Charlie", 78],
["David", 64],
["Eva", 90],
];

echo"Daftar Siswa yang lulus: <br>";
for ($i=0; $i < count($nilaiMatematika) ; $i++) { 
    if ($nilaiMatematika[$i][1] > 75) {
        echo "Nama: {$nilaiMatematika[$i][0]},<br> Nilai: {$nilaiMatematika[$i][1]}<br><br>";
    }
}

?>